<?php
require_once 'php/config.php';

// Leitura (READ) dos agendamentos
$stmt = $pdo->query("SELECT * FROM agendamentos ORDER BY data, hora");
$agendamentos = $stmt->fetchAll();

// Busca agendamento para edição
$agendamentoEditar = null;
if (isset($_GET['editar'])) {
    $stmt = $pdo->prepare("SELECT * FROM agendamentos WHERE id = :id");
    $stmt->execute([':id' => (int) $_GET['editar']]);
    $agendamentoEditar = $stmt->fetch();
}

$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão Beleza & Barbearia Elegance - Agendamentos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <span class="brand-logo">E</span> Elegance
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Agendamentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalCadastro">Novo Agendamento</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===== HERO ===== -->
    <header class="hero">
        <div class="container">
            <h1>Salão <span class="destaque-dourado">Elegance</span> & Barbearia</h1>
            <p class="lead">Gerencie seus agendamentos com facilidade, elegância e precisão.</p>
        </div>
    </header>

    <!-- ===== MENSAGENS ===== -->
    <?php if ($msg) : ?>
        <div class="container mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php
                    $textos = [
                        'criado'     => 'Agendamento criado com sucesso!',
                        'atualizado' => 'Agendamento atualizado com sucesso!',
                        'deletado'   => 'Agendamento excluído com sucesso!'
                    ];
                    echo isset($textos[$msg]) ? $textos[$msg] : 'Operação realizada com sucesso!';
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    <?php endif; ?>

    <!-- ===== CONTEÚDO ===== -->
    <main class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Lista de Agendamentos</span>
                <button class="btn btn-dourado btn-sm" data-bs-toggle="modal" data-bs-target="#modalCadastro">
                    + Novo Agendamento
                </button>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-striped">
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
                        <?php if (count($agendamentos) > 0) : ?>
                            <?php foreach ($agendamentos as $a) : ?>
                                <tr>
                                    <td><?= $a['id'] ?></td>
                                    <td><?= htmlspecialchars($a['cliente']) ?></td>
                                    <td><?= htmlspecialchars($a['telefone']) ?></td>
                                    <td><?= htmlspecialchars($a['servico']) ?></td>
                                    <td><?= htmlspecialchars($a['profissional']) ?></td>
                                    <td><?= date('d/m/Y', strtotime($a['data'])) ?></td>
                                    <td><?= date('H:i', strtotime($a['hora'])) ?></td>
                                    <td>
                                        <span class="badge-status badge-<?= $a['status'] ?>">
                                            <?= ucfirst($a['status']) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="index.php?editar=<?= $a['id'] ?>" class="btn btn-sm btn-outline-primary">Editar</a>
                                        <a href="php/agendamento.php?acao=deletar&id=<?= $a['id'] ?>"
                                           onclick="return confirmarExclusao(<?= $a['id'] ?>)"
                                           class="btn btn-sm btn-outline-danger">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="9" class="text-center text-muted py-4">
                                    Nenhum agendamento encontrado. Clique em "Novo Agendamento" para começar.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- ===== MODAL CADASTRO / EDIÇÃO ===== -->
    <div class="modal fade" id="modalCadastro" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <?= $agendamentoEditar ? 'Editar Agendamento' : 'Novo Agendamento' ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form id="form-agendamento" method="POST"
                      action="php/agendamento.php?acao=<?= $agendamentoEditar ? 'atualizar' : 'criar' ?>">
                    <div class="modal-body">
                        <?php if ($agendamentoEditar) : ?>
                            <input type="hidden" name="id" value="<?= $agendamentoEditar['id'] ?>">
                        <?php endif; ?>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Cliente *</label>
                                <input type="text" name="cliente" class="form-control"
                                       value="<?= $agendamentoEditar ? htmlspecialchars($agendamentoEditar['cliente']) : '' ?>">
                                <div class="invalid-feedback" id="feedback-cliente"></div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Telefone *</label>
                                <input type="text" name="telefone" class="form-control"
                                       placeholder="(00) 00000-0000"
                                       value="<?= $agendamentoEditar ? htmlspecialchars($agendamentoEditar['telefone']) : '' ?>">
                                <div class="invalid-feedback" id="feedback-telefone"></div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control"
                                       placeholder="cliente@email.com"
                                       value="<?= $agendamentoEditar ? htmlspecialchars($agendamentoEditar['email']) : '' ?>">
                                <div class="invalid-feedback" id="feedback-email"></div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Serviço *</label>
                                <select name="servico" class="form-select">
                                    <option value="">Selecione...</option>
                                    <?php
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
                                <div class="invalid-feedback" id="feedback-servico"></div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Profissional *</label>
                                <select name="profissional" class="form-select">
                                    <option value="">Selecione...</option>
                                    <?php
                                        $profissionais = ['Ana Souza', 'Carlos Lima', 'Fernanda Rocha', 'Juliana Mendes', 'Rafael Pinto'];
                                        foreach ($profissionais as $p) :
                                    ?>
                                        <option value="<?= $p ?>"
                                            <?= $agendamentoEditar && $agendamentoEditar['profissional'] === $p ? 'selected' : '' ?>>
                                            <?= $p ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback" id="feedback-profissional"></div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Data *</label>
                                <input type="date" name="data" class="form-control"
                                       value="<?= $agendamentoEditar ? $agendamentoEditar['data'] : '' ?>">
                                <div class="invalid-feedback" id="feedback-data"></div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Hora *</label>
                                <input type="time" name="hora" class="form-control"
                                       value="<?= $agendamentoEditar ? $agendamentoEditar['hora'] : '' ?>">
                                <div class="invalid-feedback" id="feedback-hora"></div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select" <?= $agendamentoEditar ? '' : 'disabled' ?>>
                                    <option value="agendado" <?= $agendamentoEditar && $agendamentoEditar['status'] === 'agendado' ? 'selected' : '' ?>>Agendado</option>
                                    <option value="concluido" <?= $agendamentoEditar && $agendamentoEditar['status'] === 'concluido' ? 'selected' : '' ?>>Concluído</option>
                                    <option value="cancelado" <?= $agendamentoEditar && $agendamentoEditar['status'] === 'cancelado' ? 'selected' : '' ?>>Cancelado</option>
                                </select>
                                <?php if (!$agendamentoEditar) : ?>
                                    <input type="hidden" name="status" value="agendado">
                                <?php endif; ?>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Observação</label>
                                <textarea name="observacao" class="form-control" rows="2"
                                          placeholder="Observações adicionais (opcional)"><?= $agendamentoEditar ? htmlspecialchars($agendamentoEditar['observacao']) : '' ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">
                            <?= $agendamentoEditar ? 'Salvar Alterações' : 'Agendar' ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ===== RODAPÉ ===== -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5><span class="brand-logo" style="display:inline-flex">E</span> Elegance</h5>
                    <p>Beleza, estilo e barbearia de alto padrão. Cuidamos de você do início ao fim.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Contato</h5>
                    <p><i class="bi bi-telephone"></i> (11) 3456-7890<br>
                       <i class="bi bi-envelope"></i> contato@elegance.com.br</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Horários</h5>
                    <p>Seg. a Sáb.: 09h às 20h<br>
                       Domingos: 09h às 13h</p>
                </div>
            </div>
            <div class="rodape-base">
                &copy; <?= date('Y') ?> Salão Beleza & Barbearia Elegance. Todos os direitos reservados.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/validacao.js"></script>

    <!-- Abre automaticamente o modal de edição -->
    <?php if ($agendamentoEditar) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new bootstrap.Modal(document.getElementById('modalCadastro')).show();
            });
        </script>
    <?php endif; ?>
</body>
</html>