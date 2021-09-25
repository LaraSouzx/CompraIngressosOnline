<?php
/*
../ ->PESSOAS
../../->ACOES
*/
require("../../includes/conexao.php");

$nome = mb_strtoupper($_POST['nome']);
$email = mb_strtoupper($_POST['email']);
$sexo = mb_strtoupper($_POST['sexo']);
$senha = md5($_POST['senha']);
$filme = mb_strtoupper($_POST['filme']);
$horario = mb_strtoupper($_POST['horario']);

$sql = "INSERT INTO pessoa (nome, email, sexo, senha, filme, horario) 
        VALUES ('$nome', '$email', '$sexo', '$senha', '$filme', '$horario')";

if(mysqli_query($conexao, $sql)){
    echo
    "<script>
        location.href='../../index.php?msg=salvo';
    </script>";
}else{
    echo 
    "<script>
        location.href='../../index.php?msg=erro';
    </script>";
}

?>