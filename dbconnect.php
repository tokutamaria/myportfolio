<?php
try {
    $db = new PDO('mysql:dbname=portfolio;host=localhost;port=3306;charset=utf8', 'root' , 'root');
} catch(PDOException $e) {
    print('DB接続エラー:' . $e->getMessage());
}
?>
