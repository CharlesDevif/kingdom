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
      <a class="crown" href="#donjon" title="Couronne">👑</a>
    </header>
    <nav class="nav">
      <a href="/" class="active">Accueil</a>
      <a href="/gallery.php">Galerie</a>
      <a href="/archives.php">Archives</a>
      <a href="/about.php">À propos</a>
      <a href="/login.php">Se connecter</a>
      <a href="/diagnostics.php">Diagnostics</a>
    </nav>
    <section class="hero" style="--hero:url('https://upload.wikimedia.org/wikipedia/commons/9/9c/Cit%C3%A9_de_Carcassonne_29.10.2012.jpg')">
      <div class="hero-inner">
        <h2>Archives du Chǽteau</h2>
        <p class="lead">Documents, plans et chroniques des terres d'Occitanie.</p>
      </div>
    </section>
    <main class="container">
      <section class="card">
        <h2>Accéder aux registres</h2>
        <p>Connectez-vous pour consulter les archives.</p>
        <p>
          <a class="btn" href="/login.php">Se connecter</a>
          <a class="btn secondary" href="/diagnostics.php">Diagnostics réseau</a>
        </p>
      </section>
      <!-- Piste discrète: les intendants codent parfois leurs notes en rot13 -->
      <section id="donjon" class="card secret">
        <h2>Donjon — Registre scellé</h2>
        <p>
          Les passages officiels ne sont pas les seuls. Les clés sont parfois
          cachées dans des couloirs bien connus.
        </p>
        <pre class="pre">hint (rot13): .jryy-xabja/xvatqbz-xrl-1.gkg</pre>
        <p class="runes">vagrerfg: ebg13, ebobgf, naq sevqf va qngn/..?</p>
      </section>
    </main>
    <footer class="footer">
      <small>&copy; Château d’Occitanie — Montpellier</small>
    </footer>
  </body>
</html>
