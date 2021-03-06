<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomrulario de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <style type="text/css">
        #tamanhoContainer{
            width: 500px;
        }

        #botao{
            background-color: #A2122F;
            color: white;
        }

    </style>
    

</head>
<body>
    
    <div class="container" id="tamanhoContainer" style="margin-top: 40px" >
        
    <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
        
        <h4>Formulario de Cadastro</h4>
    <form action="_inserir_produto.php" method="post" style="margin-top: 20px">

        <div class="form-group">
            <label>Numero do Produto</label>
            <input type="number" class="form-control" name="numproduto"  placeholder="Insira o numero do produto"  required>
        </div>  
        
        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nomeproduto"  placeholder="Insira o nome do produto" autocomplete="off" required>
        </div>  
        
        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control form-select" name="categoria" required>
                
                <?php

                include 'conexao.php';
                $sql = "SELECT * FROM categoria order by categoria ASC"; // ASC - faz as categorias aparecerem em ordem alfabetica 
                $buscar = mysqli_query($conexao,$sql);
                
                while($array = mysqli_fetch_array($buscar)){
                    echo $id_categoria = $array['id_categoria'];
                    echo $nome_categoria = $array['categoria'];
                ?>
                                
                <option><?php echo $nome_categoria ?></option>
                    <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade"  placeholder="Insira a quantidade do produto"  required>
        </div>   

        <div class="form-group">
            <label>Fornecedores</label>
            <select class="form-control form-select" name="fornecedor">
                <?php
                include 'conexao.php';
                $sql2 = "SELECT * FROM fornecedor";
                $buscar2 = mysqli_query($conexao, $sql2);

                while($array2 = mysqli_fetch_array($buscar2)){
                    $id_fornecedor = $array2['id_forn'];
                    $nome_fornecedor = $array2['nome_forn'];
                ?>
                

                <option><?php echo $nome_fornecedor ?></option>
                
                <?php } ?>

            </select>
        </div>
        <br>
        <div style="text-align: right;">
            <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>   
        </div>
    </form>

    

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>

