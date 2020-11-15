<?php
$host = 'mysql10086.xserver.jp';
$dbname = 'ta19880721_portfolio';
$user = 'ta19880721_ta910';
$pass = 'takuto19880721';
$dbh = "mysql:dbname=$dbname;host=$host;post=$post;charset=utf8";

try {
    $db = new PDO($dbh, $user, $pass);
} catch(PDOException $e) {
    print('DB接続エラー:' . $e->getMessage());
}
?>
