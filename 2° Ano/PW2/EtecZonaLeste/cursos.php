<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo 'Etec Zona Leste - Cursos'; ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/cursos.css">
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
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <a class="nav-link" href="contato.php"><?php echo 'Contato'; ?></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="<?php echo 'Pesquisar'; ?>" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit"><?php echo 'Pesquisar'; ?></button>
      </form>
    </div>
  </div>
</nav>

<main class="main-container">
  <h1 class="page-title"><?php echo 'Cursos'; ?></h1>
  <div class="title-underline"></div>

  <div class="courses-grid">
    <!-- 1 - Administração -->
    <div class="card">
      <div class="card-img card-img-adm"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Administração'; ?></h3>
        <p class="card-text"><?php echo '✔ Curso Técnico - Modalidade Presencial'; ?></p>
      </div>
    </div>

    <!-- 2 - Contabilidade -->
    <div class="card">
      <div class="card-img card-img-contabilidade"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Contabilidade'; ?></h3>
        <p class="card-text"><?php echo '✔ Curso Técnico - Modalidade Presencial'; ?></p>
      </div>
    </div>

    <!-- 3 - Desenvolvimento de Sistemas -->
    <div class="card">
      <div class="card-img card-img-ds"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Desenvolvimento de Sistemas'; ?></h3>
        <p class="card-text"><?php echo '✔ Curso Técnico - Modalidade Presencial'; ?></p>
      </div>
    </div>

    <!-- 4 - Finanças -->
    <div class="card">
      <div class="card-img card-img-financas"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Finanças'; ?></h3>
        <p class="card-text"><?php echo '✔ Curso Técnico - Modalidade Presencial'; ?></p>
      </div>
    </div>

    <!-- 5 - Logística -->
    <div class="card">
      <div class="card-img card-img-logistica"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Logística'; ?></h3>
        <p class="card-text"><?php echo '✔ Curso Técnico - Modalidade Presencial'; ?></p>
      </div>
    </div>

    <!-- 6 - Médio Técnico Administração -->
    <div class="card">
      <div class="card-img card-img-medio-adm"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Médio Técnico Administração'; ?></h3>
        <p class="card-text"><?php echo '✔ Ensino Médio integrado ao técnico (M-Tec)'; ?></p>
      </div>
    </div>

    <!-- 7 - Médio Técnico Desenvolvimento de Sistemas -->
    <div class="card">
      <div class="card-img card-img-medio-ds"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Médio Técnico Desenvolvimento de Sistemas'; ?></h3>
        <p class="card-text"><?php echo '✔ Ensino Médio integrado ao técnico (M-Tec)'; ?></p>
      </div>
    </div>

    <!-- 8 - Médio Técnico DS AMS (Tarde) -->
    <div class="card">
      <div class="card-img card-img-ams-ds"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Médio Técnico Desenvolvimento de Sistemas AMS (Tarde)'; ?></h3>
        <p class="card-text"><?php echo '✔ Articulação dos Ensinos Médio - Técnico e Superior (AMS)'; ?></p>
      </div>
    </div>

    <!-- 9 - Médio Técnico Recursos Humanos AMS -->
    <div class="card">
      <div class="card-img card-img-ams-rh"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Médio Técnico em Recursos Humanos AMS (Tarde)'; ?></h3>
        <p class="card-text"><?php echo '✔ Articulação dos Ensinos Médio - Técnico e Superior (AMS)'; ?></p>
      </div>
    </div>

    <!-- 10 - Médio Técnico Logística -->
    <div class="card">
      <div class="card-img card-img-medio-log"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Médio Técnico Logística'; ?></h3>
        <p class="card-text"><?php echo '✔ Ensino Médio integrado ao técnico (M-Tec)'; ?></p>
      </div>
    </div>

    <!-- 11 - Médio Técnico Recursos Humanos -->
    <div class="card">
      <div class="card-img card-img-medio-rh"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Médio Técnico Recursos Humanos'; ?></h3>
        <p class="card-text"><?php echo '✔ Ensino Médio integrado ao técnico (M-Tec)'; ?></p>
      </div>
    </div>

    <!-- 12 - Recursos Humanos -->
    <div class="card">
      <div class="card-img card-img-recursoshumanos"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Recursos Humanos'; ?></h3>
        <p class="card-text"><?php echo '✔ Curso Técnico - Modalidade Presencial'; ?></p>
      </div>
    </div>

    <!-- 13 - Serviços Jurídicos -->
    <div class="card">
      <div class="card-img card-img-servicosjuridicos"></div>
      <div class="card-content">
        <h3 class="card-title"><?php echo 'Serviços Jurídicos'; ?></h3>
        <p class="card-text"><?php echo '✔ Curso Técnico - Modalidade Presencial'; ?></p>
      </div>
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
