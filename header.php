<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo htmlspecialchars($pageTitle ?? 'Meu Portfolio'); ?></title>
  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation" aria-label="Menu principal">
    <div class="container">
      <a class="navbar-brand" href="index.php">Guilherme Amorim</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Alternar navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#quem-sou">Quem sou</a></li>
          <li class="nav-item"><a class="nav-link" href="#uc">UCs</a></li>
          <li class="nav-item"><a class="nav-link" href="#projetos">Projetos</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Conteúdo principal começa depois -->
