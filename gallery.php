<?php ?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Chateau d'Occitanie - Galerie</title>
    <meta name="description" content="Galerie d'images des archives et forteresses d'Occitanie" />
    <link rel="stylesheet" href="/assets/style.css" />
  </head>
  <body>
    <header class="header">
      <h1>Chateau d'Occitanie</h1>
      <p>Galerie des Archives</p>
    </header>
    <nav class="nav">
      <a href="/">Accueil</a>
      <a href="/gallery.php" class="active">Galerie</a>
      <a href="/archives.php">Archives</a>
      <a href="/about.php">À propos</a>
      <a href="/login.php">Se connecter</a>
      <a href="/diagnostics.php">Diagnostics</a>
    </nav>
    <section class="hero" style="--hero:url('https://upload.wikimedia.org/wikipedia/commons/a/a5/Ch%C3%A2teau_de_Peyrepertuse_01.jpg')">
      <div class="hero-inner">
        <h2>Galerie</h2>
        <p class="lead">Forteresses, remparts et manuscrits de nos collections</p>
      </div>
    </section>
    <main class="container">
      <section class="card">
        <div class="grid cols-3">
          <figure class="figure">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Cit%C3%A9_de_Carcassonne_29.10.2012.jpg" alt="Cité de Carcassonne" />
            <figcaption class="caption">Cité de Carcassonne — remparts au couchant</figcaption>
          </figure>
          <figure class="figure">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Chateau_de_Foix_2017.jpg" alt="Chateau de Foix" />
            <figcaption class="caption">Chateau de Foix — Ariège</figcaption>
          </figure>
          <figure class="figure">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d7/Lastours-4chateaux.jpg" alt="Châteaux de Lastours" />
            <figcaption class="caption">Les 4 châteaux de Lastours</figcaption>
          </figure>
        </div>
      </section>
      <section class="card">
        <span class="badge">Manuscrits</span>
        <div class="grid cols-3" style="margin-top:12px;">
          <figure class="figure">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/30/Miniature_%28manuscrit%29.jpg" alt="Miniature manuscrit médiéval" />
            <figcaption class="caption">Miniature (manuscrit médiéval)</figcaption>
          </figure>
          <figure class="figure">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Medieval_Manuscript_Page.jpg" alt="Page de manuscrit" />
            <figcaption class="caption">Page de manuscrit — enluminures</figcaption>
          </figure>
          <figure class="figure">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Illuminated_manuscript.jpg" alt="Enluminure" />
            <figcaption class="caption">Enluminure — détail</figcaption>
          </figure>
        </div>
      </section>
    </main>
    <footer class="footer">
      <small>&copy; Chateau d'Occitanie — Montpellier</small>
    </footer>
  </body>
  </html>

