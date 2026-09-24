<?php
$mensagemSucesso = "";
$dados = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = htmlspecialchars($_POST["nome"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $telefone = htmlspecialchars($_POST["telefone"] ?? "");
    $assunto = htmlspecialchars($_POST["assunto"] ?? "");
    $mensagem = htmlspecialchars($_POST["mensagem"] ?? "");
    $aceite = isset($_POST["aceite"]) ? "Sim" : "Não";

    $dados = compact("nome", "email", "telefone", "assunto", "mensagem", "aceite");

    $mensagemSucesso = "Mensagem enviada com sucesso!";
} else {
    $mensagemSucesso = "Acesso inválido!";
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "Etec Zona Leste - Contato"; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/processar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo 'Etec Zona Leste'; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php"><?php echo 'Home'; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="gestao.php"><?php echo 'Gestão'; ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php echo 'Cursos'; ?></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cursos.php"><?php echo 'Cursos Técnicos - Modalidade Presencial'; ?></a></li>
                            <li><a class="dropdown-item" href="cursos.php"><?php echo 'Ensino Médio integrado ao técnico (M-TEC)'; ?></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="cursos.php"><?php echo 'Articulação dos Ensinos Médio – Técnico e Superior (AMS)'; ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="contato.php"><?php echo 'Contato'; ?></a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="<?php echo 'Pesquisar'; ?>" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit"><?php echo 'Pesquisar'; ?></button>
                </form>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="page-title">
                <h1><?php echo "Contato <i class='ri-contacts-line'></i>"; ?></h1>
                <div class="title-underline"></div>
            </div>

            <div class="card">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                    <div class="sucesso">
                        <?php echo $mensagemSucesso; ?>
                    </div>
                    <div class="info">
                        <p><strong><?php echo "Nome:"; ?></strong> <?php echo $dados["nome"]; ?></p>
                        <p><strong><?php echo "Email:"; ?></strong> <?php echo $dados["email"]; ?></p>
                        <p><strong><?php echo "Telefone:"; ?></strong> <?php echo $dados["telefone"]; ?></p>
                        <p><strong><?php echo "Assunto:"; ?></strong> <?php echo $dados["assunto"]; ?></p>
                        <p><strong><?php echo "Mensagem:"; ?></strong> <?php echo $dados["mensagem"]; ?></p>
                        <p><strong><?php echo "Política de Privacidade aceita:"; ?></strong> <?php echo $dados["aceite"]; ?></p>
                    </div>
                <?php else: ?>
                    <div class="erro">
                        <?php echo $mensagemSucesso; ?>
                    </div>
                <?php endif; ?>
                <a href="contato.php" class="btn"><strong><?php echo "Voltar"; ?></strong></a>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-grid">
            <div>
                <h4><?php echo 'Etec Zona Leste'; ?></h4>
                <p><?php echo 'São Paulo - SP'; ?></p>
            </div>
            <div>
                <h4><?php echo 'Telefone'; ?></h4>
                <p><?php echo '(11) 2045-4000 / 2045-4016'; ?></p>
            </div>
            <div>
                <h4><?php echo 'Horário de funcionamento'; ?></h4>
                <p><?php echo 'Seg. a Sex. das 09h às 21h'; ?></p>
            </div>
        </div>
        <div class="footer-bottom">
            <?php echo '© 2026 - Centro Paula Souza, todos os direitos reservados'; ?>
        </div>
    </footer>
</body>
</html>
