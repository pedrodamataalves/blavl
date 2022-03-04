<?php
include_once("locadora.php");
$pesquisa = $_GET["pesquisa"];

$sqlRegistros = mysqli_query($conexao,"select tituloFilme, nomeCategoria from 
tbFilmes inner join tbCategoria on tbFilme.idCategoria = tbCategoria.idCategoria where tituloFilme like %$pesquisa");
$num_linhas = mysqli_num_rows($sqlRegistros);
echo "<table border = '1'>";
echo "<tr> <th> Titulo do Filme</th><th>Categoria</th><tr>";

for ($i; $i<$num_linhas;$i++){
    $dados = $mysqli_fetch_array($sqlRegistros);
    $tituloFilme = $dados ["tituloFilme"];
    $nomeCategoria = $dados["nomeCategoria"];
    echo "<tr> <td> $tituloFilme</td> <td>$nomeCategoria</tr>";

}

 echo "</table>";
 
 ?>