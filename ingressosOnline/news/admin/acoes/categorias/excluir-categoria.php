<?php
require('../../includes/verificaLogado.php');
require('../../includes/conexao.php');
$id= $_GET['id'];

$sql = "DELETE FROM filmes WHERE id=$id";

if(mysqli_query($conexao, $sql)){
    echo "<script>
            location.href='../../listar-categorias.php'
          </script>";
}