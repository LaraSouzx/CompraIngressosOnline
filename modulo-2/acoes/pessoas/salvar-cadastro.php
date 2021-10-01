<?php
/*
../ ->PESSOAS
../../->ACOES
*/
require("../../includes/conexao.php");
$email = mb_strtoupper($_POST['email']);
$senha = md5($_POST['senha']);



$sql = "INSERT INTO usuarios (email, senha) 
        VALUES ('$email', '$senha')";

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