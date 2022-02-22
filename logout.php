<?php
session_start();
$_SESSION = array();
session_destroy();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ログアウト | Sample保育園 -職員連絡サイト-</title>
    <link href="css/logout.css" rel="stylesheet">
  </head>
  <body>
    <!-- メイン -->
    <main>
      <h2>ログアウトしました</h2>
      <a href='index.php'><p>トップページに戻る</p></a>
    </main>
  </body>
</html>
