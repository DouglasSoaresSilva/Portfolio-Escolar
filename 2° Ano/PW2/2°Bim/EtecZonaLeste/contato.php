<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo 'Etec Zona Leste - Contato'; ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS\contato.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo 'Etec Zona Leste'; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php"><?php echo 'Home'; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gestao.php"><?php echo 'Gestão'; ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo 'Cursos'; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cursos.php"><?php echo 'Cursos Técnicos - Modalidade Presencial'; ?></a></li>
            <li><a class="dropdown-item" href="cursos.php"><?php echo 'Ensino Médio integrado ao técnico (M-TEC)'; ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cursos.php"><?php echo 'Articulação dos Ensinos Médio – Técnico e Superior (AMS)'; ?></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contato.php"><?php echo 'Contato'; ?></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="<?php echo 'Search'; ?>" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit"><?php echo 'Pesquisar'; ?></button>
      </form>
    </div>
  </div>
</nav>

<main>
  <div class="container">
    <div class="page-title">
      <h1><?php echo 'Contato'; ?> <i class="ri-contacts-line"></i></h1>
      <div class="title-underline"></div>
    </div>
    <form action="processar.php" method="post" class="form" id="contactForm">
      <div class="pesquisar">
        <label for="nome"><?php echo 'Nome completo'; ?></label>
        <input
          type="text"
          name="nome"
          class="pesquisar-input"
          id="nome"
          placeholder=" "
        />
        <span class="text-danger" id="erro-nome"></span>
      </div>

      <div class="pesquisar">
        <label for="email"><?php echo 'E-mail para contato'; ?></label>
        <input
          type="email"
          name="email"
          class="pesquisar-input"
          id="email"
          placeholder=" "
        />
        <span class="text-danger" id="erro-email"></span>
      </div>

      <div class="pesquisar">
        <label for="telefone"><?php echo 'Telefone'; ?></label>
        <input
          type="text"
          name="telefone"
          class="pesquisar-input"
          id="telefone"
          placeholder=" "
        />
        <span class="text-danger" id="erro-telefone"></span>
      </div>

      <div class="pesquisar">
        <label for="assunto"><?php echo 'Assunto'; ?></label>
        <select
          name="assunto"
          class="pesquisar-input"
          id="assunto"
        >
          <option value="">-- Selecione um assunto --</option>
          <option value="dúvida">Dúvida</option>
          <option value="sugestão">Sugestão</option>
          <option value="reclamação">Reclamação</option>
          <option value="elogio">Elogio</option>
          <option value="outro">Outro</option>
        </select>
        <span class="text-danger" id="erro-assunto"></span>
      </div>

      <div class="pesquisar">
        <label for="mensagem"><?php echo 'Mensagem'; ?></label>
        <textarea
          name="mensagem"
          class="pesquisar-input"
          id="mensagem"
          placeholder=" "
          rows="6"
        ></textarea>
        <small id="charCount" class="d-block mt-2">0 / 500</small>
        <span class="text-danger" id="erro-mensagem"></span>
      </div>

      <div class="pesquisar form-check">
        <input
          type="checkbox"
          class="form-check-input"
          id="aceite"
          name="aceite"
        />
        <label class="form-check-label" for="aceite">
          <?php echo 'Aceito a Política de Privacidade'; ?>
        </label>
        <span class="text-danger d-block" id="erro-aceite"></span>
      </div>

      <button class="bnt" type="submit" id="submitBtn"><?php echo 'Enviar'; ?></button>
    </form>
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

<script src="script.js"></script>
</body>
</html>
