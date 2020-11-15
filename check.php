<?php
session_start();
require('dbconnect.php');

if (!isset($_SESSION['check'])) {
    header('Location: index.php');
    exit();
}

if(!empty($_POST)) {
  $statement = $db->prepare('INSERT INTO members SET name=?, email=?, message=?, created=NOW()');
  echo $statement->execute(array(
    $_SESSION['check']['name'],
    $_SESSION['check']['email'],
    $_SESSION['check']['message'],
  ));
  unset($_SESSION['check']);

  header('Location: thanks.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link rel="stylesheet" href="check.css">
</head>
<body>
<!-- お問い合わせ -->
  <section class="contact" id="contact">
  <div class="wrapper">
      <h2 class="front_text">CONFIRM<span class="back_text">CONFIRM</span></h2>
      <p>ご確認ください</p>
      <form action="" method="post" autocomplete="off">
      <input type="hidden" name="action" value="submit">
        <!-- 名前 -->
        <div class="contact_name">
          <label for="name"><h3>Name</h3></label>
          <input type="text" name="name"
          value="<?php print(htmlspecialchars($_SESSION['check']['name'], ENT_QUOTES)); ?>">
        </div>
        <!-- メールアドレス -->
        <div class="contact_email">
          <label for="email"><h3>E-mail</h3></label>
          <input id="email" type="text" name="email"
          value="<?php print(htmlspecialchars($_SESSION['check']['email'], ENT_QUOTES)); ?>">
        </div>
        <!-- メッセージ -->
        <div class="contact_message">
          <label for="massage"><h3>Message</h3></label>
          <textarea id="massage" name="message" cols="30" rows="10"><?php print(htmlspecialchars($_SESSION['check']['message'], ENT_QUOTES)); ?></textarea>
        </div>
        <div><a href="index.php?action=rewrite" class=contact_btn>戻 る</a>
        <button type="submit" name="button" value="送信" class="contact_btn">送 信</button>
        </div>
      </form>
    </div>
  </section>
</body>
</html>
