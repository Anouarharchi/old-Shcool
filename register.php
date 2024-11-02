<?php
include 'db_connect.php';

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        ':email' => $email,
        ':password' => $password
    ]);
    echo 'Registration successful. <a href="index.html">Login here</a>';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
