<?php include('includes/header.php') ?>
<?php include('includes/menu-lateral.php') ?>
<?php include('includes/barra-superior.php') ?>
<?php require('includes/conexao.php') ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">

        <div class="row">
            <div class="col-md-9">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Posts</h6>
            </div>
            <div class="col-md-3">
                <a href="cadastrar-posts.php">
                    <button class="btn btn-primary col-md-12">+ Novo Post</button>
                </a>
            </div>
        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="table-postos" widht="100%" cellspacing="0">
                <thead>
                    <th>#ID</th>
                    <th>Nome</th>
                    <th>Filme</th>
                    <th>Horario</th>
                    <th>Acoes</th>
                </thead>

                <tbody>
                    <?php
                    $sql = "SELECT *, filmes.filme as nomeFilme, compras.nome as comprador, compras.id as idCompra FROM compras join filmes on filmes.id = compras.filme ORDER BY filmes.id DESC";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $id = $row['idCompra'];
                        $nome= $row['comprador'];
                        $filme = $row['nomeFilme'];
                        $horario = $row['horario'];

                        ?>
                        <tr class="centro">
                            <td><strong><?php echo $id ?></strong></td>
                            <td><?php echo $nome ?></td>
                            <td><?php echo $filme ?></td>
                            <td><?php echo $horario ?>h</td>
                            <td>
                                <a href="editar-categoria.php?id=<?php echo $id ?>&nomeCategoria=<?php echo $descricao ?>">
                                    <button class="btn btn-info">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </button></a>
                                <a href="acoes/posts/deletar-usuario.php?id=<?php echo $id ?>">
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                        Excluir
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>