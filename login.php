<?php
  require_once __DIR__ . ('/templates/header.php');
  require_once __DIR__ . ('/lib/pdo.php');
  require_once __DIR__ . ('/lib/user.php');

  $errors = [];

  if (isset($_POST['loginUser'])) {
    $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);

    if ($user) {
      // Si on a un user, on le connecte
    } else {
      // Si on a pas de user, on affiche un message d'erreur
      $errors[] = 'Identifiants ou mot de passe incorrects';
    }
  }
?>

<main class="form-signin w-100 m-auto">

  <?php foreach($errors as $error) { ?>
    <div class="alert alert-danger" role="alert">
      <?= $error ?>
    </div>
  <?php } ?>

  <form method="post">
    <h1 class="h2 mb-3 fw-normal">Se connecter</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email" placeholder="nom@exemple.com">
      <label for="email">Adresse email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
      <label for="password">Mot de passe</label>
    </div>
    <input class="btn btn-primary w-100 py-2 mt-1" type="submit" name="loginUser" value="Connexion">
  </form>
</main>

<?php
require_once __DIR__ . ('/templates/footer.php');
?>