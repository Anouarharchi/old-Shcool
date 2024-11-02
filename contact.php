<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "old_school"; 

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO contact_messages (name,email, message) VALUES (:name,:email, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    $stmt->execute();

    header("Location: contact.html");
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
