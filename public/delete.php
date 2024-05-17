<?php
require  __DIR__."/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_id"])) {
    $delete_id = $_POST["delete_id"];

    $stmt = $pdo->prepare("DELETE FROM messages WHERE id = :id");
    $stmt->bindParam(':id', $delete_id);
    $stmt->execute();
}
?>