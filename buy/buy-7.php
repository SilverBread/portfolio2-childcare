<?php
  // DBに接続
  $dsn = '';
  $user = '';
  $password = '';
  
  
  // 例外処理
  try {
    // PDOインスタンスの生成
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // プリペアドステートメントを作成
    $stmt = $db->prepare("SELECT * FROM posts WHERE used_by='職員' ORDER BY created DESC");
    // クエリの実行
    $stmt->execute();
  } catch (PDOException $e){
    exit("エラー：" . $e->getMessage());
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>必要なもの | マイページ | Sample保育園 -職員連絡サイト-</title>
    <link href="css/buy-all.css" rel="stylesheet">
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
      <div class="List">
      <table>
        <caption>必要なもの【職員】</caption>
          <thead>
            <tr>
              <th></th>
              <th>使う人/クラス</th>
              <th>必要なもの</th>
              <th>必要な数</th>
              <th>いつまでに必要か</th>
              <th>投稿者</th>
              <th>投稿日</th>
              <th></th>
            </tr>
          </thead>

<?php while ($row = $stmt->fetch()): ?>
          <tbody>
            <tr>
              <!-- チェックボックス -->
              <td>
                <input type="checkbox" class="check"/>
              </td>
              <!-- 使う人/クラス -->
              <td>
                <div><?php echo htmlspecialchars($row['used_by'], ENT_QUOTES, 'UTF-8') ?></div>
              </td>
              <!-- 必要なもの -->
              <td>
                <div><?php echo htmlspecialchars($row['body'], ENT_QUOTES, 'UTF-8') ?></div>
              </td>
              <!-- 必要な数 -->
              <td>
                <div><?php echo htmlspecialchars($row['number'], ENT_QUOTES, 'UTF-8') ?></div>
              </td>
              <!-- いつまでに必要か -->
              <td>
                <span><?php echo htmlspecialchars($row['year'], ENT_QUOTES, 'UTF-8') ?> 年</span>
                <span><?php echo htmlspecialchars($row['month'], ENT_QUOTES, 'UTF-8') ?> 月</span>
                <span><?php echo htmlspecialchars($row['day'], ENT_QUOTES, 'UTF-8') ?> 日</span>
              </td>
              <!-- 投稿者 -->
              <td>
                <span><?php echo htmlspecialchars($row['created_class'], ENT_QUOTES, 'UTF-8') ?></span>
                <span><?php echo htmlspecialchars($row['created_by'], ENT_QUOTES, 'UTF-8') ?></span>
              </td>
              <!-- 作成日 -->
              <td>
                <div><?php echo htmlspecialchars($row['created'], ENT_QUOTES, 'UTF-8') ?></div>
              </td>
              <!-- 削除ボタン -->
              <td>
                <div class="List-Delete">
                  <form class="delete" action="buy-delete-confirn.php" method="POST">
                    <input type="hidden" name="id" value= <?php echo $row['id'] ?>>
                    <input type="submit" class="Delete-Btn" value="削除">
                  </form>
                </div>
              </td>
            </tr>
          </tbody>
<?php endwhile; ?>
      </div>
    </main>

  </body>
</html>
