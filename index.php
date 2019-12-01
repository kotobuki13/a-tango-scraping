<?php
ini_set('display_errors', 1);
session_start();

require_once('./phpQuery-onefile.php');
require_once('./function.php');
require_once('./Controller/Index.php');

$app = new Index();
$app->run();



?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>英単語くん</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1>英単語くん</h1>
  <p>調べたい英単語を入力↓</p>
  <form method="POST">
    <input type="text" name="word">
    <input type="submit" value="検索">
  </form>
  <p class="meanLabel">
    <?= isset($_SESSION['mean']) ? h($_SESSION['mean']) : '' ?>
    <?php unset($_SESSION['mean']); ?>
  </p>
</body>

</html>