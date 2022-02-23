<?php
// データの受け取り
$id = intval($_POST['id']);

// 必須項目チェック
if ($id == ''){
  header('Location: buy.php');
  exit();
}

// DBに接続
$dsn = '';
$user = '';
$password = '';

// 例外処理
try {
  // PDOインスタンスの生成
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // PDOインスタンスの生成
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // プリペアドステートメントを作成
  $stmt = $db->prepare("DELETE FROM posts WHERE id=:id");
  // パラメータを割り当て
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  // クエリの実行
  $stmt->execute();
} catch (PDOException $e){
  exit("エラー：" . $e->getMessage());
}
//header('Location: to-buy-list.php');
  //exit();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>投稿削除 | 必要なもの | マイページ | Sample保育園 -職員連絡サイト-</title>
    <link href="css/buy-delete-complete.css" rel="stylesheet">
  </head>
  <body>
    <!-- メイン -->
    <main>
      <h2>削除しました</h2>
      <a href='buy.php'><p>必要なものに戻る</p></a>
    </main>
  </body>
</html>
