<?php
include ("locadora.php")
?>
<!doctype html>
<html>
    <head>
    
    <meta charset="utf-8">
    <title> Cadastro de FIlmes</title>
    
    </head>
    
    <body>
    
    <h1> Vídeo locadora ifpr</h1>
    <?php
    include ("menu.php")
    ?>
    <h3>Cadastro de Filmes</h3>
    <form name="cadFilmes" action ="gravar-filme.php" method="post">
    <p><label>Título</label>
    <input type="text" name="tituloFilme"></p>
    <p><label>Duração</label>
    <input type="text" name="duracaoFilme"></p>
    <p><label>valor</label>
    <input type="text" name="valorLocacao"></p>

    <p><label>Categoria</label>
    <select name="idCategoria">