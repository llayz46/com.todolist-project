<?php 
  require_once __DIR__ . ('/../lib/session.php');
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/assets/css/override-bootstrap.css">
  <link rel="stylesheet" href="/assets/css/form.css">
</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <img src="./assets/images/logo-checkit.png" alt="Logo CheckIt" width="180">
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-secondary">ACCUEIL</a></li>
        <li><a href="mes-listes.php" class="nav-link px-2">MES LISTES</a></li>
        <li><a href="#" class="nav-link px-2">Pricing</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <?php if(isset($_SESSION['user'])) { ?>
          <a href="logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
        <?php } else { ?>
          <a href="login.php" class="btn btn-outline-primary me-2">Connexion</a>
          <a href="" class="btn btn-primary">Inscription</a>
        <?php } ?>
      </div>
    </header>
  </div>