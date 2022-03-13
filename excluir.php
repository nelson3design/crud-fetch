<?php
include('config.php');

$data= file_get_contents("php://input");

$sql= $pdo->prepare("DELETE FROM produtos WHERE id=:id");
$sql->bindValue(':id',$data);
$sql->execute();
echo "ok";
?>