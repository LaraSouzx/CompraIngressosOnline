<?php

require('../../includes/conexao.php');
$email = $_POST['email'];
$senha = md5($_POST['senha']);


$sql = "SELECT 
            COUNT(*) as total
        FROM 
            pessoas
        WHERE
            email = '$email'
        AND
            senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);

while ($row = mysqli_fetch_assoc($resultado)) {
    if ($row['total'] >= 1) {
        session_start();
        $novoSql = "SELECT 
                         *  
                    FROM 
                       pessoas
                    WHERE
                       email = '$email'
                    and 
                       senha = '$senha'";
        $novoResultado = mysqli_query($conexao, $novoSql);

        while ($novoRow = mysqli_fetch_assoc($novoResultado)) {
            $_SESSION['id'] = $novoRow['id'];
        }
        $_SESSION['logado'] = true;
        echo "<script>
            location.href='../../home.php';
            </script>";
    } else {
        echo "<script>
                location.href='../../index.php?msg=erro';
            </script>";
    }
}
