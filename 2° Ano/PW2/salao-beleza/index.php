<?php
// Página principal: lista os agendamentos (READ) e hospeda o
// formulário de criar/editar (modal). CREATE/UPDATE/DELETE
// são processados em php/agendamento.php.
require_once 'php/config.php';

// READ: busca todos os agendamentos em ordem cronológica
$stmt = $pdo->query("SELECT * FROM agendamentos ORDER BY data, hora");
$agendamentos = $stmt->fetchAll();

// Modo edição: se a URL tem ?editar=N, carrega essa linha para
// preencher o modal já aberto (veja o rodapé do <body>)
$agendamentoEditar = null;
if (isset($_GET['editar'])) {
    $stmt = $pdo->prepare("SELECT * FROM agendamentos WHERE id = :id");
    $stmt->execute([':id' => (int) $_GET['editar']]);
    $agendamentoEditar = $stmt->fetch();
}

// Código da mensagem de feedback (?msg=criado|deletado|erro_email|...)
// vinda dos redirecionamentos de agendamento.php
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';

// Total de registros (reusado no hero e no cabeçalho do card)
$total = count($agendamentos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão Elegance & Barbearia — Agendamentos</title>
    <!-- Fontes: Fraunces (títulos serifados) + Poppins (texto) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,500;0,600;1,500&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS 100% próprio (sem Bootstrap) -->
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>

    <!-- ===== NAVBAR (fixa no topo) ===== -->
    <!-- data-abrir-modal + id do modal: gancho usado pelo JS para abrir modais -->
    <nav class="navbar">
        <div class="container navbar-inner">
            <a class="brand" href="index.php">
                <span class="brand-logo">E</span> Elegance
            </a>
            <!-- Botão hamburger: visível só no mobile (controla .aberto em #navLinks) -->
            <button class="menu-toggle" id="menuToggle" aria-label="Abrir menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a class="ativo" href="index.php">Agendamentos</a></li>
                <li><a href="#" data-abrir-modal="modalCadastro">Novo Agendamento</a></li>
            </ul>
        </div>
    </nav>

    <!-- ===== HERO (faixa de apresentação) ===== -->
    <header class="hero">
        <div class="container">
            <span class="hero-eyebrow">Beleza &amp; Barbearia</span>
            <h1>Salão <span class="destaque-dourado">Elegance</span> &amp; Barbearia</h1>
            <p class="lead">Gerencie seus agendamentos com facilidade, elegância e precisão.</p>
            <div class="hero-stats">
                <div class="hero-stat">
                    <strong><?= $total ?></strong>
                    <span><?= $total === 1 ? 'agendamento' : 'agendamentos' ?></span>
                </div>
            </div>
        </div>
    </header>

    <!-- ===== MENSAGENS (feedback após criar/editar/excluir) ===== -->
    <!-- data-fechar-alerta: gancho do JS para o botão × dispensar o aviso -->
    <?php if ($msg) : ?>
        <!-- Códigos de erro usam estilo vermelho; o resto, estilo de sucesso -->
        <?php $isErro = in_array($msg, ['erro_email', 'erro_id', 'nao_encontrado']); ?>
        <div class="container alert-zone">
            <div class="alert <?= $isErro ? 'alert-erro' : 'alert-sucesso' ?>" role="alert">
                <span class="alert-dot"></span>
                <?php
                    // Mapa código -> texto exibido (código desconhecido cai no genérico)
                    $textos = [
                        'criado'         => 'Agendamento criado com sucesso!',
                        'atualizado'     => 'Agendamento atualizado com sucesso!',
                        'deletado'       => 'Agendamento excluído com sucesso!',
                        'erro_email'     => 'Informe um e-mail válido!',
                        'erro_id'        => 'ID de agendamento inválido!',
                        'nao_encontrado' => 'Agendamento não encontrado!'
                    ];
                    echo isset($textos[$msg]) ? $textos[$msg] : 'Operação realizada com sucesso!';
                ?>
                <button type="button" class="alert-fechar" data-fechar-alerta aria-label="Fechar aviso">&times;</button>
            </div>
        </div>
    <?php endif; ?>

    <!-- ===== CONTEÚDO (tabela de agendamentos) ===== -->
    <main class="container conteudo">
        <section class="card">
            <div class="card-header">
                <div class="card-header-titulo">
                    <h2>Lista de Agendamentos</h2>
                    <span class="contador"><?= $total ?> <?= $total === 1 ? 'registro' : 'registros' ?></span>
                </div>
                <button type="button" class="btn btn-acento btn-pequeno" data-abrir-modal="modalCadastro">
                    + Novo Agendamento
                </button>
            </div>
            <div class="card-body tabela-wrap">
                <table class="tabela">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Telefone</th>
                            <th>Serviço</th>
                            <th>Profissional</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($total > 0) : ?>
                            <?php foreach ($agendamentos as $a) : ?>
                                <tr>
                                    <td><span class="cel-id"><?= $a['id'] ?></span></td>
                                    <!-- htmlspecialchars: valores do banco nunca saem como HTML cru -->
                                    <td class="cel-cliente"><?= htmlspecialchars($a['cliente']) ?></td>
                                    <td><?= htmlspecialchars($a['telefone']) ?></td>
                                    <td><?= htmlspecialchars($a['servico']) ?></td>
                                    <td><?= htmlspecialchars($a['profissional']) ?></td>
                                    <!-- Converte AAAA-MM-DD para DD/MM/AAAA e HH:MM:SS para HH:MM -->
                                    <td class="cel-data"><?= date('d/m/Y', strtotime($a['data'])) ?></td>
                                    <td class="cel-hora"><?= date('H:i', strtotime($a['hora'])) ?></td>
                                    <td>
                                        <!-- badge-<status> colore a pílula via CSS -->
                                        <span class="badge-status badge-<?= $a['status'] ?>">
                                            <?= ucfirst($a['status']) ?>
                                        </span>
                                    </td>
                                    <td class="cel-acoes">
                                        <!-- Editar recarrega a página em modo edição (?editar=N) -->
                                        <a href="index.php?editar=<?= $a['id'] ?>" class="btn btn-editar">Editar</a>
                                        <!-- .js-excluir + data-cliente: o JS intercepta e pede
                                             confirmação no modal mostrando o nome do cliente -->
                                        <a href="php/agendamento.php?acao=deletar&id=<?= $a['id'] ?>"
                                           class="btn btn-excluir js-excluir"
                                           data-cliente="<?= htmlspecialchars($a['cliente']) ?>">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <!-- Estado vazio: tabela sem linhas mostra mensagem amigável -->
                            <tr>
                                <td colspan="9" class="estado-vazio">
                                    <strong>Nenhum agendamento encontrado.</strong>
                                    Clique em “Novo Agendamento” para começar.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- ===== MODAL CADASTRO / EDIÇÃO ===== -->
    <!-- .aberto controla visibilidade (classe alternada pelo JS).
         Em modo edição o PHP já imprime com .aberto para abrir sozinho. -->
    <div class="modal-backdrop<?= $agendamentoEditar ? ' aberto' : '' ?>" id="modalCadastro" aria-hidden="<?= $agendamentoEditar ? 'false' : 'true' ?>">
        <div class="modal" role="dialog" aria-modal="true" aria-label="<?= $agendamentoEditar ? 'Editar Agendamento' : 'Novo Agendamento' ?>">
            <div class="modal-header">
                <h3><?= $agendamentoEditar ? 'Editar Agendamento' : 'Novo Agendamento' ?></h3>
                <!-- data-fechar-modal: gancho do JS para fechar este modal -->
                <button type="button" class="modal-fechar" data-fechar-modal aria-label="Fechar">&times;</button>
            </div>
            <!-- Ação e rótulo do botão mudam conforme criar ou editar -->
            <form id="form-agendamento" method="POST" action="php/agendamento.php?acao=<?= $agendamentoEditar ? 'atualizar' : 'criar' ?>" novalidate>
                <div class="modal-body">
                    <?php if ($agendamentoEditar) : ?>
                        <!-- ID da linha sendo editada (usado pelo UPDATE no backend) -->
                        <input type="hidden" name="id" value="<?= $agendamentoEditar['id'] ?>">
                    <?php endif; ?>

                    <!-- Grade de 12 colunas (CSS próprio): .field = meia linha -->
                    <div class="form-grid">
                        <div class="field">
                            <label class="form-label" for="campo-cliente">Cliente <span class="obrigatorio">*</span></label>
                            <input type="text" id="campo-cliente" name="cliente" class="form-control"
                                   value="<?= $agendamentoEditar ? htmlspecialchars($agendamentoEditar['cliente']) : '' ?>">
                            <!-- .feedback: o JS escreve aqui a mensagem de erro do campo -->
                            <div class="feedback" id="feedback-cliente"></div>
                        </div>
                        <div class="field">
                            <label class="form-label" for="campo-telefone">Telefone <span class="obrigatorio">*</span></label>
                            <input type="text" id="campo-telefone" name="telefone" class="form-control"
                                   placeholder="(00) 00000-0000"
                                   value="<?= $agendamentoEditar ? htmlspecialchars($agendamentoEditar['telefone']) : '' ?>">
                            <div class="feedback" id="feedback-telefone"></div>
                        </div>
                        <div class="field">
                            <label class="form-label" for="campo-email">E-mail <span class="obrigatorio">*</span></label>
                            <input type="email" id="campo-email" name="email" class="form-control" required
                                   placeholder="cliente@email.com"
                                   value="<?= $agendamentoEditar ? htmlspecialchars($agendamentoEditar['email']) : '' ?>">
                            <div class="feedback" id="feedback-email"></div>
                        </div>
                        <div class="field">
                            <label class="form-label" for="campo-servico">Serviço <span class="obrigatorio">*</span></label>
                            <select id="campo-servico" name="servico" class="form-control">
                                <option value="">Selecione...</option>
                                <?php
                                    // Catálogo de serviços (marca "selected" o atual na edição)
                                    $servicos = [
                                        'Corte de Cabelo Feminino',
                                        'Corte de Cabelo Masculino',
                                        'Corte e Barba',
                                        'Barba Completa',
                                        'Manicure e Pedicure',
                                        'Coloração / Luzes',
                                        'Escova',
                                        'Tratamento Capilar',
                                        'Sobrancelha',
                                        'Maquiagem'
                                    ];
                                    foreach ($servicos as $s) :
                                ?>
                                    <option value="<?= $s ?>"
                                        <?= $agendamentoEditar && $agendamentoEditar['servico'] === $s ? 'selected' : '' ?>>
                                        <?= $s ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <div class="feedback" id="feedback-servico"></div>
                        </div>
                        <div class="field">
                            <label class="form-label" for="campo-profissional">Profissional <span class="obrigatorio">*</span></label>
                            <select id="campo-profissional" name="profissional" class="form-control">
                                <option value="">Selecione...</option>
                                <?php
                                    // Equipe disponível (marca "selected" o atual na edição)
                                    $profissionais = ['Ana Oliveira', 'Robson Ortega', 'Fernanda Soares', 'Juliana Mendes', 'Rafael Novaes'];
                                    foreach ($profissionais as $p) :
                                ?>
                                    <option value="<?= $p ?>"
                                        <?= $agendamentoEditar && $agendamentoEditar['profissional'] === $p ? 'selected' : '' ?>>
                                        <?= $p ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <div class="feedback" id="feedback-profissional"></div>
                        </div>
                        <!-- .field-3 = 1/4 da linha (data e hora lado a lado) -->
                        <div class="field field-3">
                            <label class="form-label" for="campo-data">Data <span class="obrigatorio">*</span></label>
                            <input type="date" id="campo-data" name="data" class="form-control"
                                   value="<?= $agendamentoEditar ? $agendamentoEditar['data'] : '' ?>">
                            <div class="feedback" id="feedback-data"></div>
                        </div>
                        <div class="field field-3">
                            <label class="form-label" for="campo-hora">Hora <span class="obrigatorio">*</span></label>
                            <input type="time" id="campo-hora" name="hora" class="form-control"
                                   value="<?= $agendamentoEditar ? $agendamentoEditar['hora'] : '' ?>">
                            <div class="feedback" id="feedback-hora"></div>
                        </div>
                        <div class="field">
                            <label class="form-label" for="campo-status">Status</label>
                            <!-- Status só muda na edição; na criação vai fixo "agendado" -->
                            <select id="campo-status" name="status" class="form-control" <?= $agendamentoEditar ? '' : 'disabled' ?>>
                                <option value="agendado" <?= $agendamentoEditar && $agendamentoEditar['status'] === 'agendado' ? 'selected' : '' ?>>Agendado</option>
                                <option value="concluido" <?= $agendamentoEditar && $agendamentoEditar['status'] === 'concluido' ? 'selected' : '' ?>>Concluído</option>
                                <option value="cancelado" <?= $agendamentoEditar && $agendamentoEditar['status'] === 'cancelado' ? 'selected' : '' ?>>Cancelado</option>
                            </select>
                            <?php if (!$agendamentoEditar) : ?>
                                <!-- Campo desabilitado não é enviado: o hidden garante o valor -->
                                <input type="hidden" name="status" value="agendado">
                            <?php endif; ?>
                        </div>
                        <!-- .field-full = linha inteira -->
                        <div class="field field-full">
                            <label class="form-label" for="campo-observacao">Observação</label>
                            <textarea id="campo-observacao" name="observacao" class="form-control" rows="2"
                                      placeholder="Observações adicionais (opcional)"><?= $agendamentoEditar ? htmlspecialchars($agendamentoEditar['observacao']) : '' ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secundario" data-fechar-modal>Cancelar</button>
                    <button type="submit" class="btn btn-primario">
                        <?= $agendamentoEditar ? 'Salvar Alterações' : 'Agendar' ?>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ===== MODAL EXCLUSÃO (confirmação) ===== -->
    <!-- Preenchido pelo JS: #excluirNome recebe o cliente, #excluirConfirmar o link -->
    <div class="modal-backdrop" id="modalExclusao" aria-hidden="true">
        <div class="modal modal-pequeno" role="dialog" aria-modal="true" aria-label="Confirmar exclusão">
            <div class="modal-header">
                <h3>Excluir agendamento</h3>
                <button type="button" class="modal-fechar" data-fechar-modal aria-label="Fechar">&times;</button>
            </div>
            <div class="modal-body">
                <p class="texto-exclusao">Tem certeza que deseja excluir o agendamento de <strong id="excluirNome">este cliente</strong>? Esta ação não pode ser desfeita.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secundario" data-fechar-modal>Cancelar</button>
                <a href="#" id="excluirConfirmar" class="btn btn-excluir" style="padding:9px 18px;font-size:.9rem">Excluir</a>
            </div>
        </div>
    </div>

    <!-- ===== RODAPÉ ===== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="footer-brand"><span class="brand-logo">E</span> Elegance</div>
                    <p>Beleza, estilo e barbearia de alto padrão. Cuidamos de você do início ao fim.</p>
                </div>
                <div>
                    <h5>Contato</h5>
                    <p>(11) 3456-7890<br>contato@elegance.com.br</p>
                </div>
                <div>
                    <h5>Horários</h5>
                    <p>Seg. a Sáb.: 09h às 20h<br>Domingos: 09h às 13h</p>
                </div>
            </div>
            <div class="rodape-base">
                &copy; <?= date('Y') ?> Salão Elegance &amp; Barbearia. Todos os direitos reservados.
            </div>
        </div>
    </footer>

    <!-- JS próprio: modais, menu, alertas, exclusão e validação do formulário -->
    <script src="js/validacao.js"></script>
</body>
</html>
