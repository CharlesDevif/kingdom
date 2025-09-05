<?php
$DB_PATH = __DIR__ . '/data/app.db';
function db() {
  static $pdo = null;
  global $DB_PATH;
  if ($pdo === null) {
    $pdo = new PDO('sqlite:' . $DB_PATH);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  return $pdo;
}
