<?php

function verifyUserLoginPassword(PDO $pdo, string $email, string $password): bool|array {
  $query = $pdo->prepare('SELECT * FROM user WHERE email = :email');
  $query->bindValue(':email', $email, PDO::PARAM_STR);
  $query->execute();
  $user = $query->fetch(PDO::FETCH_ASSOC);

  if($user && password_verify($password, $user['password'])) {
    // Vérification correct => retourne l'utilisateur
    return $user;
  } else {
    // Vérification incorrect => retourne false
    return false;
  }
}