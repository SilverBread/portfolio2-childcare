<?php
  // データの受け取り
  $used_by = $_POST['used_by'];
  $body = $_POST['body'];
  $number = $_POST['number'];
  $year = $_POST['year'];
  $month = $_POST['month'];
  $day = $_POST['day'];
  $created_class = $_POST['created_class'];
  $created_by = $_POST['created_by'];
  $token = $_POST['token'];
  
  //CSRF対策：token正しいか
  if ($token != hash("sha256", session_id())){
    header('index.html');
    exit();
  }

  // 必須項目チェック（空ではないか？）
  if ($used_by == '') {
    header("Location: posts-buy.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($body == '') {
    header("Location: posts-buy.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($number == '') {
    header("Location: posts-buy.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($year == '') {
    header("Location: posts-buy.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($month == '') {
    header("Location: posts-buy.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($day == '') {
    header("Location: posts-buy.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($created_class == '') {
    header("Location: posts-buy.php");
    exit();
  }
  // 必須項目チェック（空ではないか？）
  if ($created_by == '') {
    header("Location: posts-buy.php");
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
      INSERT INTO posts (used_by, body, number, year, month, day, created_class, created_by, created)
      VALUES (:used_by, :body, :number, :year, :month, :day, :created_class, :created_by, now())"
    );
    // プリペアドステートメントにパラメータを割り当てる
    $stmt->bindParam(':used_by', $used_by, PDO::PARAM_STR);
    $stmt->bindParam(':body', $body, PDO::PARAM_STR);
    $stmt->bindParam(':number', $number, PDO::PARAM_STR);
    $stmt->bindParam(':year', $year, PDO::PARAM_STR);
    $stmt->bindParam(':month', $month, PDO::PARAM_STR);
    $stmt->bindParam(':day', $day, PDO::PARAM_STR);
    $stmt->bindParam(':created_class', $created_class, PDO::PARAM_STR);
    $stmt->bindParam(':created_by', $created_by, PDO::PARAM_STR);
    // クエリの実行
    $stmt->execute();

    // posts-buy.phpに戻る
    header('Location: posts-buy.php');
    exit();
  } catch (PDOException $e){
    exit('エラー：' . $e->getMessage());
  }
?>
