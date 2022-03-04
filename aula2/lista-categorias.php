<?php
include_once("conexao.php");

echo "<h1>Selecionando registros usando FOR</h1>";
$sqlRegistros = mysqli_query($conexao,"select * from tbCategorias");
$num_linhas = mysqli_num_rows($sqlRegistros);

for($i=0; $i<$num_linhas; $i++){

    $dados = mysqli_fetch_array($sqlRegistros);
    $idCategoria = $dados ["idCategorias"];
    $tituloFilme = $dados ["tituloFilme"];
   
    echo"Código: $idFilmes | Titulo: $tituloFilmes | Duração: $duracaoFilme | Valor: $valorLocacao <br>";

}