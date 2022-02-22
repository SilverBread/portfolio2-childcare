<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>引き継ぎ内容 | マイページ | Sample保育園 -職員連絡サイト-</title>
    <link href="css/news.css" rel="stylesheet">
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
      <div class="News">
        <h1>引き継ぎ内容</h1>
        <div class="List">
          <nav>
            <ul>
              <li><a class="all" href="news-all.php">全体</a></li>
              <li><a class="class0" href="news-0.php">0歳児クラス</a></li>
              <li><a class="class1" href="news-1.php">1歳児クラス</a></li>
              <li><a class="class2" href="news-2.php">2歳児クラス</a></li>
              <li><a class="class3" href="news-3.php">3歳児クラス</a></li>
              <li><a class="class4" href="news-4.php">4歳児クラス</a></li>
              <li><a class="class5" href="news-5.php">5歳児クラス</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </main>
  </body>
</html>
