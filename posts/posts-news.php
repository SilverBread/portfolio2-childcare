<?php
  // DBに接続
  $dsn = '';
  $user = '';
  $password = '';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>マイページ | Sample保育園 -職員連絡サイト-</title>
    <link href="css/posts-news.css" rel="stylesheet">
  </head>

  <body>
    <!-- ヘッダー -->
    <header>
      <div class="normal">
        <nav>
          <ul class="global-nav">
            <li><a href="../top.php">ホーム</a></li>
            <li><a href="../news/news.php">引き継ぎ</a></li>
            <li><a href="../buy/buy.php">必要なもの</a></li>
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
            <li><a href="../top.php">ホーム</a></li>
            <li><a href="../news/news.php">引き継ぎ</a></li>
            <li><a href="../buy/buy.php">必要なもの</a></li>
            <li><a href="posts.php">投稿</a></li>
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
    <main>
      <div class="All">
        <h1>引き継ぎ内容</h1>
        <form action="posts-news-write.php" method="post">
          <div class="Lists">
            <ul>
              <li class="List-Item">              
                <p class="Label"><span class="Required">必須</span>子どものクラス</p>
                  <select name="child_class" class="List-Item-child_class" required>
                    <option value="" disabled selected style="display:none;">選択してください</option>
                    <option>0歳児クラス</option>
                    <option>1歳児クラス</option>
                    <option>2歳児クラス</option>
                    <option>3歳児クラス</option>
                    <option>4歳児クラス</option>
                    <option>5歳児クラス</option>
                  </select>
              </li>
              <li class="List-Item">
                <p class="Label"><span class="Required">必須</span>子どもの名前</p>
                  <input type="text" name="child_name" class="List-Item-child_name" placeholder="例）氏名" required>
              </li>
              <li class="List-Item">
                <p class="Label"><span class="Required">必須</span>引き継ぎ内容</p>
                  <textarea name="body" class="List-Item-body" placeholder="例）左頬に傷あり" required></textarea>
              </li>
              <li class="List-Item">
                <p class="Label"><span class="Required">必須</span>投稿者</p>
                  <select name="created_class" class="List-Item-created_class" required>
                    <option value="" disabled selected style="display:none;">選択してください</option>
                    <option value="-">-</option>
                    <option value="0歳児クラス">0歳児クラス</option>
                    <option value="1歳児クラス">1歳児クラス</option>
                    <option value="2歳児クラス">2歳児クラス</option>
                    <option value="3歳児クラス">3歳児クラス</option>
                    <option value="4歳児クラス">4歳児クラス</option>
                    <option value="5歳児クラス">5歳児クラス</option>
                    <option value="園長">園長</option>
                    <option value="副園長">副園長</option>
                    <option value="主任">主任</option>
                  </select>
                  <input type="text" name="created_by" class="List-Item-created_by" placeholder="例）氏名" required>
              </li>
              <input type="submit" class="Add-Btn" value="追加">
              <input type="hidden" name="token" value="<?php echo hash("sha256", session_id()) ?>">
            </ul>
          </div>
        </form>
      </div>
    </main>

  </body>
</html>
