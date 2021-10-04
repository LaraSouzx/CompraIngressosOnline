<?php
require('../../includes/verificaLogado.php');
require('../../includes/conexao.php');
$id = mb_strtoupper($_POST['id']);
$nome = mb_strtoupper($_POST['nome']);
$filme = mb_strtoupper($_POST['filme']);
$horario = mb_strtoupper($_POST['horario']);

$sql = "INSERT INTO
                 compras
                     (id, nome, filme, horario)
                VALUES ('$id', '$nome','$filme', '$horario')";

if(mysqli_query($conexao, $sql)){
    echo "<script>
        location.href='../../cadastrar-categorias.php?msg=salvo';
        </script>";
}