<?php
require('../../includes/verificaLogado.php');
require('../../includes/conexao.php');
$id = $_POST['id'];
$filme = mb_strtoupper($_POST['filme']);

$sql = "UPDATE 
            filmes 
        SET 
           filme ='$filme' 
        WHERE 
            id = $id";

if(mysqli_query($conexao, $sql)){
    echo "<script>
            location.href='../../listar-categorias.php'    
          </script>";
}