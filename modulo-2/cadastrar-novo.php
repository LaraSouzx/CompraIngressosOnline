<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/pessoa.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/validar-novo-cadastro.js"></script>
    <title>Cadastre-se</title>
</head>
<body>
    <div class="container">
        <div class="row margin-top-50">
            <div class="offset-md-3 col-md-6">
                <div class="row">

                      <?php if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 'salvo') {
                            echo "<div class='col-md-12 alert alert-success'>
                                    Usuário cadastrado com sucesso!
                                  </div>";
                        }else if($_GET['msg'] == 'edit'){
                            echo "<div class='col-md-12 alert alert-info'>Usuário editado com sucesso!</div>";
                        } 
                           else {
                            echo "<div class='col-md-12 alert alert-danger'>
                                    Erro ao salvar usuário!
                                </div>";
                        }
                    } ?>

                    <div class="col-md-12" id="retorno"></div>

                    <form onsubmit="return false" method="POST" action="acoes/pessoas/salvar-cadastro.php" id="form-pessoa">

                        <div class="col-md-12">
                            <label class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Senha:</label>
                            <input type="password" id="senha" name="senha" class="form-control">
                        </div>

                        <div class="offset-md-3 col-md-6 margin-top-20">
                            <button onclick="validarCadastro()" class="btn btn-success col-md-12">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>