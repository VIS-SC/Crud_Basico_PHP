<?php

    include 'conexao.php';


    $numproduto = $_POST ['numproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];



   $sql =  " INSERT INTO `db`(`numproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`)
    VALUES ($numproduto,'$nomeproduto','$categoria',$quantidade, '$fornecedor') ";


   $inserir = mysqli_query($conexao, $sql);
 
  

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<div class="container" style="width: 300px">
  <h4>Produto adicionado com sucesso!</h4>
  <div style="padding-top: 20px">
    <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
  </div>
  
</div>