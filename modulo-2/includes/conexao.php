<?php
//CONECTANDO AO BANCO DE DADOS PHPMYADMIN
$conexao = mysqli_connect("localhost", "root", "");

if($conexao === false){
    die("erro, não foi possível conectar ao servidor");
}

//SELECIONANDO O BANCO QUE IREMOS TRABALHAR
mysqli_select_db($conexao, "crud-cadastro");