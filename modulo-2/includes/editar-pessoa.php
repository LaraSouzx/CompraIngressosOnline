<?php
require('includes/conexao.php'); 
$id = $_GET['id'];
$sql = "SELECT * FROM pessoa WHERE id = $id";
$resultado = mysqli_query($conexão, $sql);
while($row = mysqli_fetch_assoc($resultado)){
	$nome = $row['nome'];
	$email = $row['email'];
	$senha = $row['senha'];
	$id = $row['id'];
	}
?>

