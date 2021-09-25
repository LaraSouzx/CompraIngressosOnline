<?php
require('../../includes/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];

$sql = "UPDATE pessoa
SET nome = '$nome', email ='$email', sexo = '$sexo'
 WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
	echo 
	"<script>
        location.href='../../index.php?msg=edit';
    </script>";
}
 ?>
