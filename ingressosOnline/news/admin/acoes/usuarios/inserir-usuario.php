<?php
require('../../includes/verificaLogado.php');
require('../../includes/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "INSERT INTO
                pessoas 
                    (nome, email, senha) 
                VALUES 
                    ('$nome', '$email', '$senha')";

if(mysqli_query($conexao, $sql)){
    echo "<script>
            location.href='../../cadastrar-usuarios.php?msg=salvo';
         </script>";
}else{
    echo "
        <script>
            alert('erro ao salvar');
        </script>
        ";
}