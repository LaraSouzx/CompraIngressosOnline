<?php
require('../../includes/verificaLogado.php');
require('../../includes/conexao.php');
$filme = mb_strtoupper($_POST['filme']);

$sql = "INSERT INTO
                 filmes
                     (filme)
                VALUES ('$filme')";

if(mysqli_query($conexao, $sql)){
    echo "<script>
        location.href='../../cadastrar-categorias.php?msg=salvo';
        </script>";
}