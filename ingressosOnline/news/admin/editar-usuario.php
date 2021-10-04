<?php include('includes/header.php') ?>
<?php include('includes/menu-lateral.php') ?>
<?php include('includes/barra-superior.php') ?>
<?php include('includes/conexao.php') ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM pessoas WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
while ($row = mysqli_fetch_assoc($resultado)) {
    $nome = $row['nome'];
    $email = $row['email'];
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Alterar Usuário</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="alert alert-danger" id="erro-usuario" hidden>
                    Ops! Informe todos os dados para continuar!
                </div>



                <form method="POST" action="acoes/usuarios/editar-usuario.php" id="form-usuario" onsubmit="return false">
                    <input type="hidden" name="idUsuario" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" class="form-control form-control-user" id="nome" name="nome" value="<?php echo mb_strtoupper($nome) ?>">

                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control form-control-user" id="email" name="email" value="<?php echo strtoupper($email) ?>">
                    </div>

                    <div class="form-group">
                        <label>Senha - 
                            <small class="text-danger">
                                A senha será alterada, caso você preencha este campo!
                            </small>
                        </label>
                        <input 
                                type="password" 
                                class="form-control form-control-user"
                                name="senha"/>
                    </div>


                    <input type="submit" value="Editar Usuário" class="btn btn-info  col-lg-12" onclick="validarEdicaoUsuario()" />
                </form>
            </div>
        </div>
    </div>



</div>
<script src="js/usuarios.js"></script>
<?php include('includes/footer.php') ?>