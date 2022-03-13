<?php
include('config.php');
$data = file_get_contents("php://input");
$sql=$pdo->prepare("SELECT * FROM produtos ORDER BY id DESC");
$sql->execute();


if ($data != "") {
    $sql = $pdo->prepare("SELECT * FROM produtos WHERE id LIKE '%" . $data . "%' OR produto LIKE '%" . $data . "%' OR preco LIKE '%" . $data . "%'");
    $sql->execute();
}
$info = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach($info as $dados){
    echo "
   <tr class='tbody'>

   <td data-label='id'>".$dados['id']. "</td>
   <td data-label='codigo'>".$dados['codigo']. "</td>
   <td data-label='produto'>".$dados['produto']. "</td>
   <td data-label='preco'>".$dados['preco']. "</td>
   <td data-label='quantidade'>".$dados['quant']. "</td>
   <td data-label='açôes'>
   <span onclick=edit('".$dados['id']."')><button>Editar</button></span>
   <span onclick=del('".$dados['id']."')><button>Excluir</button></span>
   </td>
  
   </tr>

    ";
}


?>