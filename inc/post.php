<?php
require 'verification.php';
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "comm";


$mail = check_email($_POST['mail']);
$password = check_password($_POST['password']);


try {
    $conn = new PDO("mysql:host=$servername;port=3308;dbname=$dbname", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO users (mail, password)
    VALUES(:mail, :password)");
    
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':password', $password);
    if (isset($mail, $password)) {
        $stmt->execute();
        alert("New user added successfully !");
    } else {
        alert("Please fill-up all fields correctly !");
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
header("Refresh:0");
?>