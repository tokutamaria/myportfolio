<?php
session_start();

if (!empty($_POST)) {
  if ($_POST['name'] === '') {
    $error['name'] = 'blank';
  }
  if ($_POST['email'] === '') {
    $error['email'] = 'blank';
  }
  if ($_POST['message'] === '') {
    $error['message'] = 'blank';
  }
  if (empty($error)) {
    $_SESSION['check'] = $_POST;
    header('Location: check.php');
    exit();
  }
}

if ($_REQUEST['action'] == 'rewrite' && isset($_SESSION['join'])) {
  $_POST = $_SESSION['check'];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@tackbook">
  <meta name="twitter:creator" content="@tackbook">
  <meta name="twitter:title" content="有馬拓人ポートフォリオサイト">
  <meta name="twitter:description" content="職務経歴書、制作物一覧">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:url" content="https://my-portfolio.takuto-arima.com/">
  <meta property="og:title" content="有馬拓人 ポートフォリオサイト">
  <meta property="og:description" content="有馬拓人のポートフォリオです。">
  <meta property="og:image" content="https://my-portfolio.takuto-arima.com/images/example.png">
  <title>有馬拓人 ポートフォリオサイト</title>
  <!-- fontawesome -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- サイトアイコン -->
  <link rel="icon" href="/images/favicon (4).ico">
  <!-- lightbox -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- ヘッダー -->
  <header class="header" id="header">
    <nav class="inner flex space align">
      <div class="top_logo">
        <h1><a href="#">Let It Be</a></h1>
      </div>
      <div class="header_nav open">
        <ul class="flex" id="sp_nav">
          <li><a class="link" href="#about">ABOUT</a></li>
          <li><a class="link" href="#skills">SKILLS</a></li>
          <li><a class="link" href="#work">WORK</a></li>
          <li><a class="link" href="#contact">CONTACT</a></li>
        </ul>
      </div>
    </nav>
  <!-- ハンバーガーメニュー -->
  <a href="javascript:void(0)" class="accordion_open" id="open">
    <span></span>
    <span></span>
    <span></span>
  </a>
</header>

  <!-- キービジュアル -->
  <main>
  <section id="key_visual">
    <div class="kv_inner">
      <div class="kv_text">
        <h2>TAKUTO<br>Portfolio</h2>
      </div>
    </div>
  </section>
  <!-- 自己紹介 -->
  <section class="about" id="about">
    <div class="wrapper">
      <h2 class="front_text">about me<span class="back_text">about me</span></h2>
      <div class="profile flex around">
        <div class="profile_image">
          <img src="/images/Portfolio.jpg" class="my_image">
          <h2 class="profile_name">Takuto Arima</h2>
        </div>
        <div class="profile_text">
           <p>1988年07月21日生まれ/32歳</p>
           <p>大阪府堺市出身</p>
           <p>20歳を機に役者を目指して上京し、以後、芸能活動に従事しておりました。しかしながら、COVIT-19の影響により、引退を考えるに至りました。2020年６月から独学で学習を開始しました。学習ログは毎回gitにプッシュして記録するようにしております。</p>
          <ul class="sns flex ">
            <li><a href="https://twitter.com/tackbook" class="twitter" target="_blank">Twitter</a></li>
            <li><a href="mailto:ta910arima@gmail.com" class="mail"
            target="_blank">E-mail</a></li>
            <li><a href="https://github.com/tokutamaria" class="github"
            target="_blank">GitHub</a></li>
          </ul>
        </div>
        </div>
    </div>
  </section>
  <!-- スキル -->
  <section class="skills" id="skills">
    <div class="wrapper">
      <h2 class="front_text">SKILL<span class="back_text">SKILLS</span></h2>
      <ul class="skill_list flex space">
        <li class="list">
          <p>HTML5</p>
          <i class="fab fa-html5 fa-9x"></i>
        </li>
        <li class="list">
          <p>CSS3</p>
          <i class="fab fa-css3-alt fa-9x"></i>
        </li>
        <li>
          <p>Photoshop</p>
          <img class="skill_img" src="/images/Ps.jpg" alt="フォトショップ">
        </li>
        <li>
          <p>Illustrator</p>
          <img class="skill_img" src="/images/Ai.jpg" alt="イラストレーター">
        </li>
        <li>
          <p>php</p>
          <i class="fab fa-php fa-9x"></i>
        </li>
        <li>
          <p>JavaScript</p>
          <i class="fab fa-js fa-9x"></i>
        </li>
      </ul>
    </div>
  </section>
  <!-- 仕事 -->
  <section class="work" id="work">
    <div class="wrapper">
      <h2 class="front_text">WORK<span class="back_text">WORK</span></h2>
      <p class="work_info">過去の制作実績をご紹介します</p>
      <div class="work_contents">
        <div class="work_content flex space">
          <div class="work_text">
            <h3>
              <i class="fas fa-feather-alt"></i>
              LP模写❶
            </h3>
            <p>シンプルなホームページ</p>
          </div>
          <div class="work_img">
            <a href="https://placehold.jp/600x400.png">
              <img class="img_zoom inview" src="https://placehold.jp/600x400.png" alt="">
            </a>
          </div>
        </div>
        <div class="work_content flex space">
          <div class="work_text">
            <h3>
              <i class="fas fa-feather-alt"></i>
              LP模写❷
            </h3>
            <p>シンプルなホームページ</p>
          </div>
          <div class="work_img">
            <a href="">
              <img class="img_zoom inview" src="https://placehold.jp/600x400.png" alt="">
            </a>
          </div>
        </div>
        <div class="work_content flex space">
          <div class="work_text">
            <h3>
              <i class="fas fa-feather-alt"></i>
              LP模写❸
            </h3>
            <p>シンプルなホームページ</p>
          </div>
          <div class="work_img">
            <a href="">
              <img class="img_zoom inview" src="https://placehold.jp/600x400.png" alt="">
            </a>
          </div>
        </div>
        <div class="work_content flex space">
          <div class="work_text">
            <h3>
              <i class="fas fa-feather-alt"></i>
              LP模写❹
            </h3>
            <p>シンプルなホームページ</p>
          </div>
          <div class="work_img">
            <a href="">
              <img class="img_zoom inview" src="https://placehold.jp/600x400.png" alt="">
            </a>
          </div>
        </div>
        <div class="work_content flex space">
          <div class="work_text">
            <h3>
              <i class="fas fa-feather-alt"></i>
              LP模写❺
            </h3>
            <p>シンプルなホームページ</p>
          </div>
          <div class="work_img">
            <a href="">
              <img class="img_zoom inview" src="https://placehold.jp/600x400.png" alt="">
            </a>
          </div>
        </div>
        <div class="work_content flex space">
          <div class="work_text">
            <h3>
              <i class="fas fa-feather-alt"></i>
              LP模写❻
            </h3>
            <p>シンプルなホームページ</p>
          </div>
          <div class="work_img">
            <a href="">
              <img class="img_zoom inview" src="https://placehold.jp/600x400.png" alt="">
            </a>
          </div>
        </div>
    </div>
  </section>
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
          value="<?php print(htmlspecialchars($_POST['name'], ENT_QUOTES)); ?>">
        </div>
        <!-- メールアドレス -->
        <div class="contact_email">
          <?php if ($error['email'] == 'blank'): ?>
          <p class = "error">※メールアドレスを入力してください</p>
          <?php endif; ?>
          <label for="email"><h3>E-mail</h3></label>
          <input id="email" type="text" name="email"
          value="<?php print(htmlspecialchars($_POST['email'], ENT_QUOTES)); ?>">
        </div>
        <!-- メッセージ -->
        <div class="contact_message">
          <?php if ($error['message'] == 'blank'): ?>
          <p class = "error">※メーセージを入力してください</p>
          <?php endif; ?>
          <label for="massage"><h3>Message</h3></label>
          <textarea id="massage" name="message" cols="30" rows="10">
            <?php print(htmlspecialchars($_POST['message'], ENT_QUOTES)); ?>
          </textarea>
        </div>
        <button type="submit" name="button" value="送信" class="contact_btn">送信</button>
      </form>
    </div>
  </section>
  </main>
  <!-- フッター -->
  <footer class="footer">
    <div class="inner">
      <div class="copyright">
        <p>&COPY;/2020/Takuto Arima/Portfolio.</p>
      </div>
    </div>
  </footer>
  <!-- トップに移動 -->
  <div id="page_top">
    <a href="#"><i class="fas fa-chevron-circle-up fa-4x"></i></a>
  </div>
  <script src="js/main.js"></script>
</body>
</html>