<?php ?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Chateau d'Occitanie - Registres</title>
    <meta name="description" content="Inventaire succinct de quelques registres" />
    <link rel="stylesheet" href="/assets/style.css" />
  </head>
  <body>
    <header class="header">
      <h1>Chateau d'Occitanie</h1>
      <p>Inventaire des registres</p>
    </header>
    <nav class="nav">
      <a href="/">Accueil</a>
      <a href="/gallery.php">Galerie</a>
      <a href="/archives.php" class="active">Archives</a>
      <a href="/about.php">À propos</a>
      <a href="/login.php">Se connecter</a>
      <a href="/diagnostics.php">Diagnostics</a>
    </nav>
    <section class="hero" style="--hero:url('https://upload.wikimedia.org/wikipedia/commons/f/f6/Ch%C3%A2teau_de_Penne_-_Vue_g%C3%A9n%C3%A9rale.jpg')">
      <div class="hero-inner">
        <h2>Registres & Cartulaires</h2>
        <p class="lead">Extraits numérisés et notices synthétiques</p>
      </div>
    </section>
    <main class="container">
      <section class="card">
        <h2>Notices</h2>
        <ul>
          <li>
            <strong>Registre des tailles (1471)</strong>
            <div class="meta">Cote: ARX/1471-TL — État: lisible</div>
            <p>Liste des impositions et exemptions sur les bourgs voisins.</p>
          </li>
          <li>
            <strong>Cartulaire des fiefs (XVe)</strong>
            <div class="meta">Cote: ARX/FIEF-XV — État: reliure fragile</div>
            <p>Tenures, hommages, mutations et aveux des vassaux.</p>
          </li>
          <li>
            <strong>Registre des entrées (1502-1507)</strong>
            <div class="meta">Cote: ARX/ENT-1502 — État: complet</div>
            <p>Inventaire des entrées au château et livraisons diverses.</p>
          </li>
        </ul>
      </section>
      <section class="card">
        <span class="badge">Extraits numérisés</span>
        <div class="grid cols-3" style="margin-top:12px;">
          <figure class="figure">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Medieval_manuscript_illumination.jpg" alt="Enluminure manuscrit" />
            <figcaption class="caption">Enluminure — missel</figcaption>
          </figure>
          <figure class="figure">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Medieval_manuscript_page_with_text.jpg" alt="Page manuscrit" />
            <figcaption class="caption">Page — gothique textura</figcaption>
          </figure>
          <figure class="figure">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Medieval_charter.jpg" alt="Charte scellée" />
            <figcaption class="caption">Charte scellée — parchemin</figcaption>
          </figure>
        </div>
        <p class="msg">Accès complet réservé — un <a href="/login.php">compte</a> est requis.</p>
      </section>
    </main>
    <footer class="footer">
      <small>&copy; Chateau d'Occitanie — Montpellier</small>
    </footer>
  </body>
  </html>

