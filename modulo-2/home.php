<?php require('includes/header.php')?>
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

                    <form onsubmit="return false" method="POST" action="acoes/pessoas/salvar-pessoa.php" id="form-pessoa">

                        <div class="col-md-12">
                            <label class="form-label">Nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Sexo:</label>
                            <select class="form-select" id="sexo" name="sexo">
                                <option value="">Selecione...</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Senha:</label>
                            <input type="password" id="senha" name="senha" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Filme</label>
                            <select class="form-select" id="filme" name="filme">
                                <option value="">Selecione...</option>
                                <option value="1">Matrix 4</option>
                                <option value="2">Whoami: Nenhum sistema está a salvo</option>
                                <option value="3">Gente Grande 2</option>
                                <option value="4">Interstellar</option>
                                <option value="5">Ilha do medo</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Horarío</label>
                            <select class="form-select" id="horario" name="horario">
                                <option value="">Selecione...</option>
                                <option value="1">14:30</option>
                                <option value="2">17:30</option>
                                <option value="3">18:40</option>
                                <option value="4">20:00</option>
                            </select>
                        </div>

                        <div class="offset-md-3 col-md-6 margin-top-20">
                            <button onclick="validarPessoa()" class="btn btn-success col-md-12">Salvar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="row margin-top-20">
            <div class="offset-md-1 col-md-10">
                <h3>Usuários Cadastrados</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th>FILME</th>
                            <th>HORARIO</th>
                            <th>ACOES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require('includes/conexao.php');
                            $sql = "SELECT * FROM pessoas ORDER BY id DESC";
                            $resultado = mysqli_query($conexao, $sql);
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr id="pessoa-<?php echo $row['id']?>">
                            <th><?php echo $row['id'] ?></th>
                            <th><?php echo $row['nome'] ?></th>
                            <th><?php echo $row['email'] ?></th>
                            <th><?php echo $row['filme']?></th>
                            <th><?php echo $row['horario']?></th>
                            <th>
                                <button class="btn btn-danger btn-sm"
                                onclick="deletar ('<?php echo $row['id']?>')" 
                                >Excluir</button>
                                <a href="editar-pessoa.php?id=<?php echo $row['id']?>">
                                <button class="btn btn-info btn-sm" 
                                >Editar</button>
                                </a>
                            </th>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
</body>

</html>