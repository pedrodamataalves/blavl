<?php

$servidor = "localhost";
$usuario = "root";
$senha = "bancodedados";
$idname = "dblocadora";

//Criar a conexao

$conn = mysqli_connect($servidor, $usuario, $senha, $idname);

if ($conn -> connect_error) {
    echo "Desconectado! Erro: ", $conn ->connect_error;
} 
else {
    "Conectado!";
}

?>