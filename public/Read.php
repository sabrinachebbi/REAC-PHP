<?php
require  __DIR__."/db.php";

$sql=("SELECT * FROM messages");
$stmt=$pdo->query($sql);
$result=$stmt->fetchAll();



?>
