<?php
/* Simple themed landing page with discreet hints */
?><!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Château d’Occitanie — Archives</title>
    <meta name="description" content="Portail des Archives du Château d’Occitanie">
    <!-- hint: certaines clés sont souvent 'bien rangées'... vérifiez les légendes et les couloirs .well-known/ -->
    <link rel="stylesheet" href="/assets/style.css" />
  </head>
  <body>
    <header class="header">
      <h1>🏰 Château d’Occitanie</h1>
      <p>Portail des Archives — Accès restreint</p>
    </header>
    <main class="container">
      <section class="card">
        <h2>Accéder aux registres</h2>
        <p>Connectez-vous pour consulter les archives.</p>
        <p>
          <a class="btn" href="/login.php">Se connecter</a>
          <a class="btn secondary" href="/diagnostics.php">Diagnostics réseau</a>
        </p>
      </section>
    </main>
    <footer class="footer">
      <small>&copy; Château d’Occitanie — Montpellier</small>
    </footer>
  </body>
</html>
