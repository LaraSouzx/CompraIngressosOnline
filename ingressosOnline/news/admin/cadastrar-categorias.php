<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastrar Categorias</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="alert alert-danger" id="erro-categorias" hidden>
                    Ops! Informe todos os dados para continuar!
                </div>


                <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == "salvo") {
                        echo "<div class='alert alert-success'>
                        Salvo com sucesso!
                        </div>";
                    }
                }
                ?>

                <form method="POST" action="acoes/categorias/inserir-categoria.php" id="form-categoria" onsubmit="return false">
                    <div class="form-group">
                        <label>Nome da Categoria:</label>
                        <input type="text" 
                                class="form-control form-control-user" 
                                id="filme" name="filme">
                    </div>
                
                    <input type="submit" value="Salvar Categoria" class="btn btn-success col-lg-12" onclick="validarCategoria()" />
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>

<script src="js/categorias.js"></script>
<?php include('includes/footer.php'); ?>    