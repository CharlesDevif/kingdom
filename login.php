<?php
require __DIR__.'/config.php';
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $u = $_POST['username'] ?? '';
  $p = $_POST['password'] ?? '';
  $sql = "SELECT id,role FROM users WHERE username='$u' AND password=LOWER(MD5('$p'))";
  try {
    $row = db()->query($sql)->fetch(PDO::FETCH_ASSOC);
    if ($row) {
      $secret = db()->query("SELECT value FROM secrets WHERE name='kingdom_key_2'")->fetchColumn();
      $msg = "Bienvenue {$row['role']}! Secret: ".$secret;
    } else {
      $msg = "Échec de connexion.";
    }
  } catch (Exception $e) {
    $msg = "Erreur: " . $e->getMessage();
  }
}
?><!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Connexion — Archives</title>
    <link rel="stylesheet" href="/assets/style.css" />
  </head>
  <body>
    <main class="container">
      <section class="card">
        <h2>Connexion</h2>
        <form method="post">
          <div class="field">
            <label>Identifiant</label>
            <input name="username" placeholder="user" autofocus />
          </div>
          <div class="field">
            <label>Mot de passe</label>
            <input name="password" type="password" placeholder="pass" />
          </div>
          <button class="btn">Entrer</button>
        </form>
        <p class="msg"><?php echo htmlspecialchars($msg); ?></p>
      </section>
    </main>
  </body>
</html>
