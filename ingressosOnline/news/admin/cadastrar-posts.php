<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Compre seu ingresso</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="alert alert-danger" id="erro-posts" hidden>
                    Ops! Informe todos os dados para continuar!
                </div>


                <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == "erroImagem") {
                        echo "<div class='alert alert-danger'>
                            Insira uma imagem no formato PNG ou JPG
                        </div>";
                    }else if($_GET['msg'] == "salvo"){
                        echo "<div class='alert alert-success'>
                            Salvo com sucesso!
                              </div>";
                    }
                }
                ?>

                <form method="POST" action="acoes/posts/inserir-filme.php" id="form-post" onsubmit="return false" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" class="form-control form-control-user" id="nome" name="nome">
                    </div>

                    <div class="form-group">
                        <label>Filme:</label>
                        <select class="form-control form-control-user" name="filme" id="filme">
                            <?php
                            require('includes/conexao.php');
                            $sql = "SELECT * FROM 
                                        filmes
                                     ORDER BY
                                        filme
                                    ASC";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($row = mysqli_fetch_assoc($resultado)) {
                                $id = $row['id'];
                                $filme = $row['filme'];
                                echo "<option value='$id'>$filme</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Horario:</label>
                        <select class="form-control form-control-user" name="horario" id="horario">
                            <option value="">Selecione...</option>
                            <option value="16:00">16:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:40">18:40</option>
                            <option value="19:15">19:15</option>
                            <option value="20:30">20:30</option>
                            <option value="21:45">21:45</option>
                        </select>
                    </div>

                    
                   

                    <input type="submit" value="Salvar Post" class="btn btn-success col-lg-12" onclick="validarPost()">
                </form>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>

<script src="js/posts.js"></script>
<?php include('includes/footer.php'); ?>