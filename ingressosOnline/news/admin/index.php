<?php
session_start();
if (isset($_SESSION['logado'])) {
    echo "<script>
            location.href='home.php';
          </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="container container-fluid">
        <div class="row">
            <div class="offset-md-2 col-md-8 box-login">
                <h5 class="titulo">Área restrita - Faça login para continuar</h5>

                <div id="retorno-login">

                </div>

                <?php
                //ISSET -> SE EXISTIR
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == "erro") {
                        echo "
                                <div class='alert alert-danger'>
                                    Ops! Os dados informados estão 
                                    incorretos.
                                </div>";
                    }
                }
                ?>

                <form method="post" id="form-login" action="acoes/usuarios/login.php" onsubmit="return false">
                    <div class="form-group">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div>

                    <div class="form-group btn-logar">
                        <button onclick="validarLogin()" class="btn btn-outline-light col-sm-12 col-xs-12 offset-md-3 col-md-6">LOGAR</button>
                    </div>
                        <a href="cadastrar-usuarios.php">Cadastra-se</a>
                </form>           
            </div>
        </div>
    </div>                 
</body>

</html>