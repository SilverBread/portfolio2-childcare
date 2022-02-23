<?php
$id = intval($_POST['id']);


// 必須項目チェック
if ($id == ''){
  header('Location: news.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>投稿削除確認 | 引き続き内容 | マイページ | Sample保育園 -職員連絡サイト-</title>
    <link href="css/news-delete-confirn.css" rel="stylesheet">
  </head>
  <body>
    <!-- メイン -->
    <main>
      <h2>本当に削除してもよろしいですか</h2>
      <div class="Btn">
        <div class="Back-Btn">
          <input type="button" onclick="history.back()" class="Back-Btn" value="戻る">
        </div>
        <div class="Delete-Btn">
          <form class="delete" action="news-delete-complete.php" method="POST">
            <input type="hidden" name="id" value= <?php echo $id ?>>
            <input type="submit" name="delete" class="Delete-Btn" value="削除する">
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
