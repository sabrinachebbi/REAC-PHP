<?php
session_start();
require  __DIR__."/db.php";


require __DIR__."/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"])) {
    $message = $_POST["message"];


    $stmt = $pdo->prepare("INSERT INTO messages (message) VALUES (:message)");
    $stmt->bindParam(':message', $message);
    $stmt->execute();
}
?>

?>