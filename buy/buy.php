<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>必要なもの | マイページ | Sample保育園 -職員連絡サイト-</title>
    <link href="css/buy.css" rel="stylesheet">
  </head>

  <body>
    <!-- ヘッダー -->
    <header>
      <div class="normal">
        <nav>
          <ul class="global-nav">
            <li><a href="../top.php">ホーム</a></li>
            <li><a href="../news/news.php">引き継ぎ</a></li>
            <li><a href="buy.php">必要なもの</a></li>
            <li><a href="../posts/posts.php">投稿</a></li>
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
            <li><a href="../top.php">ホーム</a></li>
            <li><a href="../news/news.php">引き継ぎ</a></li>
            <li><a href="buy.php">必要なもの</a></li>
            <li><a href="../posts/posts.php">投稿</a></li>
            <!-- ログアウトボタン -->
            <li>
              <form action="../logout.php" method="POST">
                <input type="submit" name="logout" class="Logout-Btn" value="ログアウト">
              </form>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    
    <!-- メイン -->
    <main>
      <div class="Buy">
        <h1>必要なもの</h1>
        <div class="List">
          <nav>
            <ul>
              <li><a class="all" href="buy-all.php">全体</a></li>
              <li><a class="class0" href="buy-0.php">0歳児クラス</a></li>
              <li><a class="class1" href="buy-1.php">1歳児クラス</a></li>
              <li><a class="class2" href="buy-2.php">2歳児クラス</a></li>
              <li><a class="class3" href="buy-3.php">3歳児クラス</a></li>
              <li><a class="class4" href="buy-4.php">4歳児クラス</a></li>
              <li><a class="class5" href="buy-5.php">5歳児クラス</a></li>
              <li><a class="class5" href="buy-6.php">保護者</a></li>
              <li><a class="class5" href="buy-7.php">職員</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </main>

  </body>
</html>
