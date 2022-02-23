<?php
  // データの受け取り
  $child_class = $_POST['child_class'];
  $child_name = $_POST['child_name'];
  $body = $_POST['body'];
  $created_class = $_POST['created_class'];
  $created_by = $_POST['created_by'];
  $token = $_POST['token'];
  
  //CSRF対策：token正しいか
  if ($token != hash("sha256", session_id())){
    header('index.html');
    exit();
  }

  // 必須項目チェック（空ではないか？）
  if ($child_class == '') {
    header("Location: posts-news.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($child_name == '') {
    header("Location: posts-news.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($body == '') {
    header("Location: posts-news.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($created_class == '') {
    header("Location: posts-news.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($created_by == '') {
    header("Location: posts-news.php");
    exit();
  }

  // DBに接続
  $dsn = '';
  $user = '';
  $password = '';

  try {
    // PDOインスタンスの作成
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // プリペアドステートメントを作成
    $stmt = $db->prepare("
      INSERT INTO news (child_class, child_name, body, created_class, created_by, created)
      VALUES (:child_class, :child_name, :body, :created_class, :created_by, now())"
    );
    // プリペアドステートメントにパラメータを割り当てる
    $stmt->bindParam(':child_class', $child_class, PDO::PARAM_STR);
    $stmt->bindParam(':child_name', $child_name, PDO::PARAM_STR);
    $stmt->bindParam(':body', $body, PDO::PARAM_STR);
    $stmt->bindParam(':created_class', $created_class, PDO::PARAM_STR);
    $stmt->bindParam(':created_by', $created_by, PDO::PARAM_STR);
    // クエリの実行
    $stmt->execute();

    // posts-news.phpに戻る
    header('Location: posts-news.php');
    exit();
  } catch (PDOException $e){
    exit('エラー：' . $e->getMessage());
  }
?>
