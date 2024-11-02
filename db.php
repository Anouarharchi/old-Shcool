<?php
$dsn = 'mysql:host=localhost;dbname=game_db;charset=utf8';
$username = 'your_db_username'; 
$password = 'your_db_password'; 

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
