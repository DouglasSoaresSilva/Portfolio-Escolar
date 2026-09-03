<?php
// Ações do CRUD de Agendamentos

require_once 'config.php';

// Sanitização e validação de entrada
function sanitizar($dados) {
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados, ENT_QUOTES, 'UTF-8');
    return $dados;
}

$acao = isset($_GET['acao']) ? $_GET['acao'] : (isset($_POST['acao']) ? $_POST['acao'] : '');

// ---------- CREATE (Criar) ----------
if ($acao === 'criar') {
    $cliente      = sanitizar($_POST['cliente']);
    $telefone     = sanitizar($_POST['telefone']);
    $email        = sanitizar($_POST['email']);
    $servico      = sanitizar($_POST['servico']);
    $profissional = sanitizar($_POST['profissional']);
    $data         = sanitizar($_POST['data']);
    $hora         = sanitizar($_POST['hora']);
    $observacao   = sanitizar($_POST['observacao']);

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../index.php?msg=erro_email');
        exit;
    }

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
    header('Location: ../index.php?msg=criado');
    exit;
}

// ---------- UPDATE (Atualizar) ----------
if ($acao === 'atualizar') {
    $id = (int) $_POST['id'];

    $cliente      = sanitizar($_POST['cliente']);
    $telefone     = sanitizar($_POST['telefone']);
    $email        = sanitizar($_POST['email']);
    $servico      = sanitizar($_POST['servico']);
    $profissional = sanitizar($_POST['profissional']);
    $data         = sanitizar($_POST['data']);
    $hora         = sanitizar($_POST['hora']);
    $observacao   = sanitizar($_POST['observacao']);
    $status       = sanitizar($_POST['status']);

    if ($id <= 0) {
        header('Location: ../index.php?msg=erro_id');
        exit;
    }

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../index.php?msg=erro_email');
        exit;
    }

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
if ($acao === 'deletar') {
    $id = (int) ($_GET['id'] ?? 0);

    if ($id <= 0) {
        header('Location: ../index.php?msg=erro_id');
        exit;
    }

    $check = $pdo->prepare("SELECT id FROM agendamentos WHERE id = :id");
    $check->execute([':id' => $id]);

    if (!$check->fetch()) {
        header('Location: ../index.php?msg=nao_encontrado');
        exit;
    }

    $sql = "DELETE FROM agendamentos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    header('Location: ../index.php?msg=deletado');
    exit;
}
?>