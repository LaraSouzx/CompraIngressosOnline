<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];
$filme = $_POST['filme'];
$horario = $_POST['horario'];

$nomeSexo;
if($sexo == "M"){
    $nomeSexo = "Masculino";
}else{
    $nomeSexo = "Feminino";
}

echo $nome;
echo "<br>";
echo $email;
echo "<br>";
echo $nomeSexo;
echo "<br>";
echo md5($senha);
echo $filme;
echo "<br>";
echo $horario;
?>