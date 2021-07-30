<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "estoque";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

if ($conexao -> connect_error) {
    die("A SUA CONEXÃO FALHOU : " . $conexao -> connect_error);
  }
  echo "Connected successfully";
  
?>