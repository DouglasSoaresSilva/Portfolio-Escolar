<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo 'Etec Zona Leste - Gestão'; ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/gestao.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  
  <!-- CDN do Remix Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css" rel="stylesheet">
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
          <a class="nav-link active" href="gestao.php"><?php echo 'Gestão'; ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo 'Cursos'; ?></a>
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

<main class="container">
  <div class="page-title">
    <h1><i class="ri-team-line" aria-hidden="true"></i><?php echo 'Gestão Escolar'; ?></h1>
    <div class="title-underline"></div>
  </div>

  <p class="intro-text">
    <?php echo 'Conheça a equipe responsável pela direção, coordenação e supervisão pedagógica da ETEC Zona Leste. Estamos à disposição para garantir uma gestão transparente e de qualidade para toda a comunidade.'; ?>
  </p>

  <!-- Diretoria -->
  <section aria-labelledby="direcao-title">
    <h2 id="direcao-title" class="section-title"><?php echo 'Direção Geral'; ?></h2>
    <ul class="grid-cards" role="list">
      <li class="card-gestor" role="listitem">
        <div class="avatar" aria-hidden="true"><i class="ri-user-settings-line"></i></div>
        <h3><?php echo 'Profa. Dra. Mariana Oliveira'; ?></h3>
        <div class="cargo"><?php echo 'Diretora Geral'; ?></div>
        <p><?php echo 'Responsável pela administração geral, planejamento estratégico e relações institucionais.'; ?></p>
        <address class="email-gestor"><i class="ri-mail-line" aria-hidden="true"></i> <a href="mailto:diretoria@etecleste.sp.gov.br"><?php echo 'diretoria@etecleste.sp.gov.br'; ?></a></address>
      </li>
      <li class="card-gestor" role="listitem">
        <div class="avatar" aria-hidden="true"><i class="ri-user-star-line"></i></div>
        <h3><?php echo 'Prof. Carlos Mendes'; ?></h3>
        <div class="cargo"><?php echo 'Vice-Diretor'; ?></div>
        <p><?php echo 'Acompanhamento pedagógico, gestão de recursos e apoio à comunidade escolar.'; ?></p>
        <address class="email-gestor"><i class="ri-mail-line" aria-hidden="true"></i> <a href="mailto:vicediretoria@etecleste.sp.gov.br"><?php echo 'vicediretoria@etecleste.sp.gov.br'; ?></a></address>
      </li>
      <li class="card-gestor" role="listitem">
        <div class="avatar" aria-hidden="true"><i class="ri-government-line"></i></div>
        <h3><?php echo 'Adriana Souza'; ?></h3>
        <div class="cargo"><?php echo 'Supervisora Pedagógica'; ?></div>
        <p><?php echo 'Coordenação de currículos, formação continuada e avaliação institucional.'; ?></p>
        <address class="email-gestor"><i class="ri-mail-line" aria-hidden="true"></i> <a href="mailto:pedagogico@etecleste.sp.gov.br"><?php echo 'pedagogico@etecleste.sp.gov.br'; ?></a></address>
      </li>
    </ul>
  </section>

  <!-- Coordenadores de Curso -->
  <section aria-labelledby="coordenadores-title">
    <h2 id="coordenadores-title" class="section-title"><?php echo 'Coordenadores de Cursos'; ?></h2>
    <ul class="grid-cards" role="list">
      <li class="card-gestor" role="listitem">
        <div class="avatar" aria-hidden="true"><i class="ri-code-line"></i></div>
        <h3><?php echo 'Me. Rafael Lima'; ?></h3>
        <div class="cargo"><?php echo 'Desenvolvimento de Sistemas'; ?></div>
        <p><?php echo 'Coordenador do curso técnico em DS, estágios e projetos de inovação.'; ?></p>
        <address class="email-gestor"><i class="ri-mail-line" aria-hidden="true"></i> <a href="mailto:ds@etecleste.sp.gov.br"><?php echo 'ds@etecleste.sp.gov.br'; ?></a></address>
      </li>
      <li class="card-gestor" role="listitem">
        <div class="avatar" aria-hidden="true"><i class="ri-wifi-line"></i></div>
        <h3><?php echo 'Esp. Fernanda Castro'; ?></h3>
        <div class="cargo"><?php echo 'Redes de Computadores'; ?></div>
        <p><?php echo 'Gestão do laboratório de redes, parcerias com empresas de TI.'; ?></p>
        <address class="email-gestor"><i class="ri-mail-line" aria-hidden="true"></i> <a href="mailto:redes@etecleste.sp.gov.br"><?php echo 'redes@etecleste.sp.gov.br'; ?></a></address>
      </li>
      <li class="card-gestor" role="listitem">
        <div class="avatar" aria-hidden="true"><i class="ri-flashlight-line"></i></div>
        <h3><?php echo 'Eng. Ricardo Alves'; ?></h3>
        <div class="cargo"><?php echo 'Eletrônica'; ?></div>
        <p><?php echo 'Coordenação do curso de Eletrônica, robótica e projetos integradores.'; ?></p>
        <address class="email-gestor"><i class="ri-mail-line" aria-hidden="true"></i> <a href="mailto:eletronica@etecleste.sp.gov.br"><?php echo 'eletronica@etecleste.sp.gov.br'; ?></a></address>
      </li>
      <li class="card-gestor" role="listitem">
        <div class="avatar" aria-hidden="true"><i class="ri-bar-chart-2-line"></i></div>
        <h3><?php echo 'Ma. Juliana Tavares'; ?></h3>
        <div class="cargo"><?php echo 'Administração'; ?></div>
        <p><?php echo 'Curso técnico em Administração, empreendedorismo e feiras de negócios.'; ?></p>
        <address class="email-gestor"><i class="ri-mail-line" aria-hidden="true"></i> <a href="mailto:administracao@etecleste.sp.gov.br"><?php echo 'administracao@etecleste.sp.gov.br'; ?></a></address>
      </li>
    </ul>
  </section>

  <!-- Organograma -->
  <section aria-labelledby="organograma-title" class="organograma">
    <h3 id="organograma-title" style="text-align: center; color: var(--accent); margin-bottom:1.5rem;">
      <i class="ri-flow-chart" aria-hidden="true"></i> <?php echo 'Organograma da Unidade'; ?>
    </h3>
    <div class="org-level">
      <div class="org-item"><strong><?php echo 'Diretoria'; ?></strong><br><?php echo 'Diretor(a) Geral'; ?></div>
      <div class="org-item"><strong><?php echo 'Vice-Diretoria'; ?></strong><br><?php echo 'Vice-diretor(a)'; ?></div>
      <div class="org-item"><strong><?php echo 'Supervisão Pedagógica'; ?></strong><br><?php echo 'Supervisor(a)'; ?></div>
    </div>
    <div class="connector" aria-hidden="true">▼</div>
    <div class="org-level">
      <div class="org-item"><strong><?php echo 'Coordenações de Cursos'; ?></strong><br><?php echo 'DS | Redes | Eletrônica | Adm'; ?></div>
      <div class="org-item"><strong><?php echo 'Serviços de Secretaria'; ?></strong><br><?php echo 'Registro Escolar'; ?></div>
      <div class="org-item"><strong><?php echo 'Apoio Técnico'; ?></strong><br><?php echo 'Biblioteca | Laboratórios'; ?></div>
    </div>
  </section>
</main>

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
