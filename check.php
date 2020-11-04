<?php
session_start();

if (!isset($_SESSION['check'])) {
    header('Location: index.php');
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
      <h2 class="front_text">CONTACT<span class="back_text">CONTACT</span></h2>
      <p>お問い合わせはこちら</p>
      <form action="" method="post" autocomplete="off">
        <!-- 名前 -->
        <div class="contact_name">
          <?php if ($error['name'] == 'blank'): ?>
          <p class = "error">※お名前を入力してください</p>
          <?php endif; ?>
          <label for="name"><h3>Name</h3></label>
          <input type="text" name="name"
          value="<?php print(htmlspecialchars($_SESSION['check']['name'], ENT_QUOTES)); ?>">
        </div>
        <!-- メールアドレス -->
        <div class="contact_email">
          <?php if ($error['email'] == 'blank'): ?>
          <p class = "error">※メールアドレスを入力してください</p>
          <?php endif; ?>
          <label for="email"><h3>E-mail</h3></label>
          <input id="email" type="text" name="email"
          value="<?php print(htmlspecialchars($_SESSION['check']['email'], ENT_QUOTES)); ?>">
        </div>
        <!-- メッセージ -->
        <div class="contact_message">
          <?php if ($error['message'] == 'blank'): ?>
          <p class = "error">※メーセージを入力してください</p>
          <?php endif; ?>
          <label for="massage"><h3>Message</h3></label>
          <textarea id="massage" name="message" cols="30" rows="10">
            <?php print(htmlspecialchars($_SESSION['check']['message'], ENT_QUOTES)); ?>
          </textarea>
        </div>
        <button type="submit" name="button" value="送信" class="contact_btn">送信</button>
      </form>
    </div>
  </section>
</body>
</html>
