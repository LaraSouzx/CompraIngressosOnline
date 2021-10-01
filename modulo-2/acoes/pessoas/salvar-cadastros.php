<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
echo $email;
echo "<br>";
echo md5($senha);

?>