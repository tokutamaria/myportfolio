<?php
$host = 'localhost';
$port= '3306';
$dbname = 'portfolio';
$user = 'root';
$pass = 'root';
$dbh = "mysql:dbname=$dbname;host=$host;post=$post;charset=utf8";

try {
    $db = new PDO($dbh, $user, $pass);
} catch(PDOException $e) {
    print('DB接続エラー:' . $e->getMessage());
}
?>
