<?php

    include 'conexao.php';

    $id = $_POST ['id'];    
   // $numproduto = $_POST ['numproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "UPDATE `db` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= $quantidade,
    `fornecedor`='$fornecedor' WHERE id_estoque = $id";

    $atualizar = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<div class="container" style="width: 300px">
  <h4>Atualizado com sucesso!</h4>
  <div style="margin-top: 20px">
    <a href="listar_produtos.php" role="button" class="btn btn-sm btn-warning" style="color: #ffff; " >Voltar</a>
  </div>
  
</div>