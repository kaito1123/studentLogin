<?php
session_start();
require_once('../classes/UserLogic.php');
require_once('../functions.php');

//ログインしているか判定し、していなかったら新規登録画面に戻す
$result = UserLogic::checkLogin();

if (!$result) {
  $_SESSION['login_err'] = 'ユーザーを登録してログインしてください!';
  header('Location: signup_form.php');
  return;
}

$login_user = $_SESSION['login_user'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/mypage.css">
  <title>マイページ</title>
</head>
<body>
  <h2>マイページ</h2>
  <p>ログインユーザー:<?php echo h($login_user['name']) ?></p>
  <p>メールアドレス:<?php echo h($login_user['email']) ?></p>
  <form action="logout.php" method="POST">
    <input type="submit" name="logout" value="ログアウト">
  </form>
  <div class="bg_pattern Rectangles"></div>
  <div class="section">
  <div class="_a"><a href="https://kaito1123.github.io/minecraftTypingGamesTop/" target="_blank">
  タイピングゲームへ     
  </a><div>
  </div>
</body>
</html>