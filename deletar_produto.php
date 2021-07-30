<?php

include 'conexao.php';    

    $id = $_GET['id'];

    $sql = "DELETE FROM `db` WHERE id_estoque = $id";
    $deletar = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<div class="container" style="width: 300px">
  <h4>Deletador com sucesso!</h4>
  <div style="margin-top: 20px">
    <a href="listar_produtos.php" role="button" class="btn btn-sm btn-warning" style="color: #ffff; " >Voltar</a>
  </div>
  
</div>