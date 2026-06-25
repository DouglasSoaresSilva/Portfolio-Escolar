<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo "Etec Zona Leste"; ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS\style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo "Etec Zona Leste"; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><?php echo "Home"; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gestao.php"><?php echo "Gestão"; ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo "Cursos"; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cursos.php"><?php echo "Cursos Técnicos - Modalidade Presencial"; ?></a></li>
            <li><a class="dropdown-item" href="cursos.php"><?php echo "Ensino Médio integrado ao técnico (M-TEC)"; ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cursos.php"><?php echo "Articulação dos Ensinos Médio – Técnico e Superior (AMS)"; ?></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php"><?php echo "Contato"; ?></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="<?php echo "Pesquisar"; ?>" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit"><?php echo "Pesquisar"; ?></button>
      </form>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="hero-content">
    <h2><?php echo "Etec da Zona Leste"; ?></h2>
    <p><?php echo "Acesse nossos cursos!"; ?></p>
  </div>
</section>

<div class="container">
  <div class="grid-2">

    <div>
      <div class="ir">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm1MHtZ_F5aP_aIoQAXVO1GW0bejPkRi-s1w&s" alt="<?php echo "Imposto de Renda 2026"; ?>">
        <div>
          <h3><?php echo "Imposto de Renda 2026"; ?></h3>
          <br>
          <p><?php echo "Declare o seu imposto de renda gratuitamente na Etec da Zona Leste."; ?></p>
          <br>
          <div class="btn"><?php echo "Compareça à unidade!"; ?></div>
        </div>
      </div>

      <h3 class="section-title"><?php echo "Destaques"; ?></h3>
      <div class="cards">
        <div class="card"><img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/78/2026/03/1o-DESAFIO-2HORAS-DE-INOVACAO-SITE-1-570x570.png" alt="<?php echo "Inovação Global"; ?>"><p><?php echo "Inovação Global"; ?></p></div>
        <div class="card"><img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/135/2025/10/feteps.jpg" alt="<?php echo "Feira Tecnológica"; ?>"><p><?php echo "Feira Tecnológica"; ?></p></div>
        <div class="card"><img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/135/2025/10/cnit-316x210.png" alt="<?php echo "Premiação CNIT"; ?>"><p><?php echo "Premiação CNIT"; ?></p></div>
        <div class="card"><img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/135/2025/10/prova-paulista-316x210.png" alt="<?php echo "Prova Paulista"; ?>"><p><?php echo "Prova Paulista"; ?></p></div>
      </div>
    </div>

    <div>
      <h3 class="section-title"><?php echo "Agenda de Eventos:"; ?></h3>
      <div class="agenda-item"><div class="date"><?php echo "13 Abril"; ?></div><div><strong><?php echo "Eleição do Grêmio"; ?></strong></div></div>
      <div class="agenda-item"><div class="date"><?php echo "09 Maio"; ?></div><div><strong><?php echo "Dia da Família"; ?></strong></div></div>
      <div class="agenda-item"><div class="date"><?php echo "13 Maio"; ?></div><div><strong><?php echo "Semana Paulo Freire"; ?></strong></div></div>
      <div class="agenda-item"><div class="date"><?php echo "20 Jun"; ?></div><div><strong><?php echo "Festa das Nações"; ?></strong></div></div>

      <h3 class="section-title"><?php echo "Links úteis:"; ?></h3>
      <div class="links">
        <div class="link-box"><strong><?php echo "Oportunidades"; ?></strong></div>
        <div class="link-box"><strong><?php echo "PPG"; ?></strong></div>
        <div class="link-box"><strong><?php echo "Manual"; ?></strong></div>
        <div class="link-box"><strong><?php echo "Vestibulinho"; ?></strong></div>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="footer-grid">
    <div>
      <h4><?php echo "Etec Zona Leste"; ?></h4>
      <p><?php echo "São Paulo - SP"; ?></p>
    </div>

    <div>
      <h4><?php echo "Telefone"; ?></h4>
      <p><?php echo "(11) 2045-4000 / 2045-4016"; ?></p>
    </div>

    <div>
      <h4><?php echo "Horário de funcionamento"; ?></h4>
      <p><?php echo "Seg. a Sex. das 09h às 21h"; ?></p>
    </div>
  </div>

  <div class="footer-bottom">
    <?php echo "© 2026 - Centro Paula Souza, todos os direitos reservados"; ?>
  </div>
</footer>

</body>
</html>
