<?php
$host = $_GET['host'] ?? '';
$output = '';
if ($host !== '') {
  $cmd = "ping -c 1 $host";
  $output = shell_exec($cmd . " 2>&1");
}
?><!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Diagnostics réseau</title>
    <link rel="stylesheet" href="/assets/style.css" />
  </head>
  <body>
    <main class="container">
      <section class="card">
        <h2>Diagnostics réseau</h2>
        <form method="get">
          <div class="field">
            <label>Hôte</label>
            <input name="host" placeholder="ex: 1.1.1.1" value="<?php echo htmlspecialchars($host); ?>" />
          </div>
          <button class="btn">Tester</button>
        </form>
        <pre class="pre"><?php echo htmlspecialchars($output); ?></pre>
      </section>
    </main>
  </body>
</html>
