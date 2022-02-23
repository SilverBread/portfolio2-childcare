<?php
  // DBに接続
  $dsn = '';
  $user = '';
  $password = '';
?>

<!doctype html>
<html lang="ja" >
  <head>
    <title>My Todo Lists</title>
    <link href="css/posts-buy.css" rel="stylesheet">
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

    <main>
      <div class="All">
        <h1>必要なもの 登録</h1>
        <form action="posts-buy-write.php" method="post">
          <div class="Lists">
            <ul>
              <li class="List-Item">              
                <p class="Label"><span class="Required">必須</span>使う人/クラス</p>
                  <select name="used_by" class="List-Item-used_by" required>
                    <option value="" disabled selected style="display:none;">選択してください</option>
                    <option>0歳児クラス</option>
                    <option>1歳児クラス</option>
                    <option>2歳児クラス</option>
                    <option>3歳児クラス</option>
                    <option>4歳児クラス</option>
                    <option>5歳児クラス</option>
                    <option>保護者</option>
                    <option>職員</option>
                  </select>
              </li>
              <li class="List-Item">
                <p class="Label"><span class="Required">必須</span>必要なもの</p>
                  <input type="text" name="body" class="List-Item-body" placeholder="例）画用紙" required>
              </li>
              <li class="List-Item">
                <p class="Label"><span class="Required">必須</span>必要な数</p>
                  <input type="text" name="number" class="List-Item-number" placeholder="例）20枚" required>
              </li>
              <li class="List-Item">
                <p class="Label"><span class="Any">任意</span>いつまでに必要か</p>
                  <select name="year" class="List-Item-year" required>
                    <option value="-">-</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                  </select>　年
                  <select name="month" class="List-Item-month" required>
                    <option value="-">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>　月
                  <select name="day" class="List-Item-day" required>
                    <option value="-">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>　日
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
