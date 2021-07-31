<?php

    include 'conexao.php';

 $categoria = $_POST['categoria'];

    $sql = "INSERT INTO categoria (categoria) values ('$categoria')";
    $inserir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<div class="container" style="width: 300px">
  <h4>Atualizado com sucesso!</h4>
  <div style="margin-top: 20px">
    <a href="adicionar_categoria.php" role="button" class="btn btn-sm btn-warning" style="color: #ffff; " >Voltar</a>
  </div>
  
</div>