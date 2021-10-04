<?php 

$conexao = mysqli_connect("localhost", "root", "");

if($conexao === false){
    die("erro, não foi possível conectar ao servidor");
}

mysqli_select_db($conexao, "ingressosOnline");
