<?php
require_once __DIR__ . ('/templates/header.php');
require_once __DIR__ . ('/lib/pdo.php');
require_once __DIR__ . ('/lib/list.php');

if (isset($_SESSION['user'])) {
  $lists = getListsByUserId($pdo, $_SESSION['user']['id']);
}
?>

<div class="container">
  <h1>Mes Listes</h1>
  <?php if (isset($_SESSION['user'])) {
    if ($lists) { ?>
      <ul class="row p-0">
        <?php foreach ($lists as $list) { ?>
          <div class="col-md-4 my-2">
            <div class="card w-100">
              <div class="card-header d-flex align-items-center justify-content-evenly">
                <i class="bi bi-card-checklist"></i>
                <h3 class="card-title"><?= $list['title'] ?></h3>
              </div>
              <div class="card-body d-flex justify-content-between align-items-end">
                <a href="#" class="btn btn-primary">Voir la liste</a>
                <div>
                  <span class="badge rounded-pill text-bg-primary">
                    <i class="bi <?= $list['category_icon'] ?>"></i>
                    <?= $list['category_name'] ?>
                  </span>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </ul>
    <?php } else { ?>
      <p>Aucune listes</p>
    <?php }
  } else { ?>
    <p>Vous devez être connecté pour accéder à cette page.</p>
    <a href="login.php" class="btn btn-primary">Se connecter</a>
  <?php } ?>

</div>

<?php
require_once __DIR__ . ('/templates/footer.php');
?>