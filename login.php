<?php
session_start();

if (isset($_SESSION['id'])){
  // セッションにユーザーIDある＝ログインしている
  // ログイン済みならトップページへ
  header('Location: top.php');
} else if (isset($_POST['com_email']) && isset($_POST['com_pass'])){
  // ログインしていないがユーザー名とパスワードが送信された時
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
  $stmt = $db->prepare("SELECT * FROM members WHERE com_email=:com_email AND com_pass=:com_pass");

  // パラメーター割り当て
  $stmt->bindParam(':com_email', $_POST['com_email'], PDO::PARAM_STR);
  $stmt->bindParam(':com_pass', hash("sha256", $_POST['com_pass']),  PDO::PARAM_STR);
  // クエリの実行
  $stmt->execute();

  if ($row = $stmt->fetch()){
    // ユーザーが存在していたら、セッションにユーザーIDをセットする
    $_SESSION['id'] = $row['id'];
    header('Location: top.php');
    exit();
  } else {
    // １レコードも取得できなかったとき
    // ユーザー名やパスワード間違っているかも
    // もう一度ログイン画面を表示
    header('Location: login.php');
    exit();
  }
} catch (PDOException $e){
  exit("エラー：" . $e->getMessage());
  }
}

session_destroy();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ログイン | Sample保育園 -職員連絡サイト-</title>
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>
    <!-- ヘッダー -->
    <header>
      <div class="Btn">
        <a class="Btn-Back" href="index.html">back</a>
      </div>
    </header>

    <!-- メイン -->
    <main>
      <h1>
        <ruby>
          LOGIN
          <rt>ログイン</rt>
        </ruby>
      </h1>
      <form action="" method="POST">
        <div class="Member">
          <label class="sr-only">ユーザー名</label>
            <input type="text" id="email" class="Member-Item-Input" name="com_email" placeholder="メールアドレス" value="<?php echo htmlspecialchars($_POST['com_email']??"", ENT_QUOTES); ?>">

          <label class="sr-only">パスワード</label>
            <input type="password" id="password" class="Member-Item-Input" name="com_pass" placeholder="パスワード" value="<?php echo htmlspecialchars($_POST['com_pass']??"", ENT_QUOTES); ?>">

          <?php
          //$error[‘login’]が’blank’の場合
            if (isset($error['login']) &&  ($error['login'] =='blank')): ?>
            <p class="error">ユーザー名とパスワードを入力してください</p>
          <?php endif; ?>

          <?php 
          // $error[‘login’]が’failed’の場合
            if( isset($error['login']) &&  $error['login'] =='failed'): ?>
            <p class="error">ユーザー名かパスワードが間違っています</p>
          <?php endif; ?><br/>

          <input type="submit" class="Login-Btn" name="signup" value="ログイン">
        </div>    
      </form>
    </main>

  </body>
</html>
