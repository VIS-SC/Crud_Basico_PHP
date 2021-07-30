<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/58c82d8e71.js" crossorigin="anonymous"></script>

</head>
<body>
    
        <div class="container" style="margin-top: 40px;">

        <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Numero do Produto</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedores</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>           
                    <?php
                       include 'conexao.php';
                       $sql = "SELECT * FROM `db`";
                       $busca = mysqli_query($conexao, $sql);

                       while ($array = mysqli_fetch_array($busca)){

                            $id_estoque = $array['id_estoque'];
                            $numproduto = $array['numproduto'];
                            $nomeproduto = $array['nomeproduto'];
                            $categoria = $array['categoria'];
                            $quantidade = $array['quantidade'];
                            $fornecedor = $array['fornecedor'];
                       ?>
                <tr>    
                    <td><?php echo $numproduto ?></td>
                    
                    <td><?php echo $nomeproduto ?></td>
                    
                    <td><?php echo $categoria ?></td>
                    
                    <td><?php echo $quantidade ?></td>
                    
                    <td><?php echo $fornecedor ?></td>
                    <td><a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php 
                    echo $id_estoque ?>" role="button"> <i class="far fa-edit"></i> Editar</a>
                    
                    <td><a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php 
                    echo $id_estoque ?>" role="button"> <i class="far fa-trash-alt"></i> Excluir</a>

                    </td>
                </tr>       
                    <?php } ?>
            </table>

           
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>