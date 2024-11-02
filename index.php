<?php
session_start();
include 'db_connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = 'SELECT * FROM users WHERE email = :email';
$stmt = $pdo->prepare($sql);
$stmt->execute([':email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['email'] = $email;
    header('Location: games.html');
    exit();
} else {
    echo 'Invalid email or password';
}
?>
