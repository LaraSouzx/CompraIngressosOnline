<?php
require('../../includes/verificaLogado.php');
require('../../includes/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if($senha == ""){
    $sql = "UPDATE 
                pessoas
            SET nome='$nome',
                email= '$email' 
            WHERE id = $id";
}else{
    $senhaCripto = md5($senha);
    $sql = "UPDATE 
                pessoas
            SET nome='$nome',
                email='$email',
                senha='$senhaCripto'
            WHERE id=$id";
}

if(mysqli_query($conexao, $sql)){
   echo "<script>
           location.href='../../listar-usuarios.php';
        </script>";
}