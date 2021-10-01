<?php
require('includes/conexao.php'); 
$id = $_GET['id'];
$sql = "SELECT * FROM pessoas WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

while($row = mysqli_fetch_assoc($resultado)){
	$nome = $row['nome'];
	$email = $row['email'];
	$senha = $row['senha'];
	$id = $row['id'];
	$sexo = $row['sexo'];
}
require('includes/header.php');
?>
<body>
	<div class="container">
		<div class="row margin-top-50">
			<div class="offset-md-3 col-md-6">
				 <div class="col-md-12" id="retorno"></div>

                    <form onsubmit="return false" method="POST" action="acoes/pessoas/editar-pessoa.php" id="form-pessoa">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <div class="col-md-12">
                            <label class="form-label">Nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $nome?>">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $email?>">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Sexo:</label>
                            <select class="form-select" id="sexo" name="sexo" value="<?php echo $senha?>">
                            	<?php if ($sexo == 'M') {
                            		echo"
                            		<option value = 'M' selected>Masculino</option>
                            		<option value='F'>Feminino</option>
                            		";
                            	} else{
                            		echo"
                            		<option value='F'selected>Feminino</option>
                            		<option value='M'>Masculino</option>
                            		";
                            	     }
                            	  ?>
                            </select>
                        </div>

                        <div class="offset-md-3 col-md-6 margin-top-20">
                            <button onclick="validarPessoaEdit()" class="btn btn-success col-md-12">Editar</button>
                        </div>

                    </form>

			</div>
		</div>
	</div>
</body>