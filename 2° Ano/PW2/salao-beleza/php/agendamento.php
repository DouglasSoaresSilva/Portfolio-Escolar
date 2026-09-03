<?php
// =============================================
// Ações do CRUD de Agendamentos (CREATE/UPDATE/DELETE)
// Recebe ?acao=criar|atualizar|deletar, processa no banco
// e redireciona de volta ao index.php com ?msg=... (feedback visual).
// A leitura (READ) fica em index.php.
// =============================================
require_once 'config.php';

// Limpa um valor vindo do formulário: remove espaços,
// barras e converte < > & em entidades (anti-XSS ao reexibir)
function sanitizar($dados) {
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados, ENT_QUOTES, 'UTF-8');
    return $dados;
}

// Descobre a ação pedida (via URL no DELETE, via POST no CREATE/UPDATE)
$acao = isset($_GET['acao']) ? $_GET['acao'] : (isset($_POST['acao']) ? $_POST['acao'] : '');

// ---------- CREATE (Criar) ----------
// Origem: formulário "Novo Agendamento" (modal) via POST
if ($acao === 'criar') {
    // Sanitiza cada campo recebido do formulário
    $cliente      = sanitizar($_POST['cliente']);
    $telefone     = sanitizar($_POST['telefone']);
    $email        = sanitizar($_POST['email']);
    $servico      = sanitizar($_POST['servico']);
    $profissional = sanitizar($_POST['profissional']);
    $data         = sanitizar($_POST['data']);
    $hora         = sanitizar($_POST['hora']);
    $observacao   = sanitizar($_POST['observacao']);

    // E-mail é obrigatório: barra vazio ou formato inválido antes de tocar no banco
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../index.php?msg=erro_email');
        exit;
    }

    // Insere com consulta preparada (:placeholders evitam SQL injection).
    // "status" não é enviado: o banco aplica o DEFAULT 'agendado'.
    $sql = "INSERT INTO agendamentos (cliente, telefone, email, servico, profissional, data, hora, observacao)
            VALUES (:cliente, :telefone, :email, :servico, :profissional, :data, :hora, :observacao)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':cliente'      => $cliente,
        ':telefone'     => $telefone,
        ':email'        => $email,
        ':servico'      => $servico,
        ':profissional' => $profissional,
        ':data'         => $data,
        ':hora'         => $hora,
        ':observacao'   => $observacao
    ]);
    // Volta à lista com mensagem de sucesso
    header('Location: ../index.php?msg=criado');
    exit;
}

// ---------- UPDATE (Atualizar) ----------
// Origem: formulário "Editar Agendamento" (modal) via POST, inclui o id e o status
if ($acao === 'atualizar') {
    // ID vem do <input type="hidden" name="id">; (int) garante número
    $id = (int) $_POST['id'];

    // Sanitiza cada campo recebido do formulário
    $cliente      = sanitizar($_POST['cliente']);
    $telefone     = sanitizar($_POST['telefone']);
    $email        = sanitizar($_POST['email']);
    $servico      = sanitizar($_POST['servico']);
    $profissional = sanitizar($_POST['profissional']);
    $data         = sanitizar($_POST['data']);
    $hora         = sanitizar($_POST['hora']);
    $observacao   = sanitizar($_POST['observacao']);
    $status       = sanitizar($_POST['status']);

    // ID inválido (0/negativo) = requisição adulterada: recusa com erro
    if ($id <= 0) {
        header('Location: ../index.php?msg=erro_id');
        exit;
    }

    // E-mail continua obrigatório também na edição
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../index.php?msg=erro_email');
        exit;
    }

    // Atualiza somente a linha do id informado
    $sql = "UPDATE agendamentos SET
                cliente = :cliente,
                telefone = :telefone,
                email = :email,
                servico = :servico,
                profissional = :profissional,
                data = :data,
                hora = :hora,
                observacao = :observacao,
                status = :status
            WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':cliente'      => $cliente,
        ':telefone'     => $telefone,
        ':email'        => $email,
        ':servico'      => $servico,
        ':profissional' => $profissional,
        ':data'         => $data,
        ':hora'         => $hora,
        ':observacao'   => $observacao,
        ':status'       => $status,
        ':id'           => $id
    ]);
    header('Location: ../index.php?msg=atualizado');
    exit;
}

// ---------- DELETE (Deletar) ----------
// Origem: botão "Excluir" da tabela via GET (?acao=deletar&id=N).
// Proteção em 2 etapas para nunca exibir "sucesso" falso:
//  1) id ausente/zerado/negativo  -> erro_id
//  2) id que não existe no banco  -> nao_encontrado
if ($acao === 'deletar') {
    // "?? 0" evita notice quando ?id= nem foi passado (vira 0 e cai no erro abaixo)
    $id = (int) ($_GET['id'] ?? 0);

    // Etapa 1: recusa id inválido antes de qualquer SQL
    if ($id <= 0) {
        header('Location: ../index.php?msg=erro_id');
        exit;
    }

    // Etapa 2: confirma que a linha existe de verdade no banco
    $check = $pdo->prepare("SELECT id FROM agendamentos WHERE id = :id");
    $check->execute([':id' => $id]);

    // Nada encontrado = nada seria deletado, então avisa em vez de fingir sucesso
    if (!$check->fetch()) {
        header('Location: ../index.php?msg=nao_encontrado');
        exit;
    }

    // Registro confirmado: pode deletar com segurança
    $sql = "DELETE FROM agendamentos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    header('Location: ../index.php?msg=deletado');
    exit;
}
?>
