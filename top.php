<?php
session_start();

 // DBに接続
$dsn = '';
$user = '';
$password = '';

session_write_close();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>マイページ | Sample保育園 -職員連絡サイト-</title>
    <link href="css/top.css" rel="stylesheet">
  </head>

  <body>
    <!-- ヘッダー -->
    <header>
      <div class="normal">
        <nav>
          <ul class="global-nav">
            <li><a href="top.php">ホーム</a></li>
            <li><a href="news.php">引き継ぎ</a></li>
            <li><a href="buy.php">必要なもの</a></li>
            <li><a href="posts.php">投稿</a></li>
            <!-- ログアウトボタン -->
            <li>
              <form action="logout.php" method="POST">
                <input type="submit" name="logout" class="Logout-Btn" value="ログアウト">
              </form>
            </li>
          </ul>
        </nav>
      </div>
      <div class="drawer">
        <input type="checkbox" name="navToggle" id="navToggle" class="nav-toggle">
          <label for="navToggle" class="btn-burger">
            <span class="icon"></span>
          </label>
        <nav class="nav">
          <ul class="nav-list">
            <li><a href="top.php">ホーム</a></li>
            <li><a href="news.php">引き継ぎ</a></li>
            <li><a href="buy.php">必要なもの</a></li>
            <li><a href="posts.php">投稿</a></li>
            <!-- ログアウトボタン -->
            <li>
              <form action="logout.php" method="POST">
                <input type="submit" name="logout" class="Logout-Btn" value="ログアウト">
              </form>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    
    <!-- メイン -->
    <main>
      <div class="MyPage">
        <h1>MY PAGE</h1>
        <h2>Sample保育園</h2>
        <h3>---職員連絡サイト---</h2>
      </div>
    </main>

  </body>
</html>
