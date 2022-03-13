<?php
if (isset($_POST)) {
  $codigo = $_POST['codigo'];
  $produto = $_POST['produto'];
  $preco = $_POST['preco'];
  $quant = $_POST['quant'];
  require("config.php");
  if (empty($_POST['idp'])) {
    $query = $pdo->prepare("INSERT INTO produtos (codigo, produto, preco, quant) VALUES (:codigo, :produto, :preco, :quant)");
    $query->bindParam(":codigo", $codigo);
    $query->bindParam(":produto", $produto);
    $query->bindParam(":preco", $preco);
    $query->bindParam(":quant", $quant);
    if ($_POST['codigo'] != null && $_POST['produto'] != null && $_POST['preco'] != null && $_POST['quant'] != null) {

      $query->execute();
      $pdo = null;
      echo "ok";
    } else {
      echo "vide";
    }
  } else {
    $id = $_POST['idp'];
    $query = $pdo->prepare("UPDATE produtos SET codigo = :codigo, produto = :produto, preco =:preco, quant = :quant WHERE id = :id");
    $query->bindParam(":codigo", $codigo);
    $query->bindParam(":produto", $produto);
    $query->bindParam(":preco", $preco);
    $query->bindParam(":quant", $quant);
    $query->bindParam("id", $id);
    $query->execute();
    $pdo = null;
    echo "modificado";
  }
}
