<?php
  $data= file_get_contents("php://input");
  include('config.php');
  
   $sql= $pdo->prepare("SELECT * FROM produtos WHERE id=:id");
   $sql->bindValue(':id',$data);
   $sql->execute();
   $info=$sql->fetch(PDO::FETCH_ASSOC);
   echo json_encode($info);


?>