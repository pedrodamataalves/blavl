<?php
include_once("conexao.php");

echo "<h1>Selecionando registros usando FOR</h1>";
$sqlRegistros = mysqli_query($conn,"select*from tbFilmes");
$num_linhas = mysqli_num_rows($sqlRegistros);
for($i=0; $i<$num_linhas; $i++){
    $dados = mysqli_fetch_array($sqlRegistros);
    $idFilme = $dados ["idFilme"];
    $tituloFilme = $dados ["tituloFilme"];
    $duracaoFilme = $dados ["duracaoFilme"];
    $valorLocacao = $dados ["valorLocacao"];

    echo"Código: $idFilme | Titulo: $tituloFilme | Duração: $duracaoFilme | Valor: $valorLocacao <br>";

}
?>