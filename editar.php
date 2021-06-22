<!DOCTYPE html>
<html lang="pt-br">

<head>
	<style type="text/css">
		body {
			background-color: blue;
		}

		input {
			border-color: #cccccc;
			outline: 0;
			-webkit-box-shadow: none;
			box-shadow: none;


		}
	</style>

	<title>Editar Informações do Pet</title>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

</head>

<body>
	<div class="row">
		<div class="text-center"><img src="img/logo2.jpeg" width="300" height="192">

			<br></br></br>
			<h2>Editar informações do Pet</h2></br>
		</div>
		<div class="row col-md-8 col-md-offset-2 custyle">

			<?php
			include "config.php";
			$con = new PDO("mysql:host=localhost;dbname=petshop", "root", "");
			$consulta = $con->prepare("SELECT * FROM cadastro_pet WHERE ID_CADASTRO = {$_GET['ID_CADASTRO']} limit 1");
			$consulta->execute();
			$linha = $consulta->fetchAll(PDO::FETCH_OBJ);

			if (count($linha) > 0) {

			?>
				<table class="table table-striped custab">
					<thead>
						<a href="viewInserirPet.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Adicionar novo Pet</a>
						<tr>
							<th>ID</th>
							<th>Nome do Pet</th>
							<th>Raça</th>
							<th>Responsável</th>
							<th>Idade</th>
							<th>Tipo Pet</th>
							<th class="text-center">Ação</th>
						</tr>
					</thead>
					<form action="update.php" method="POST">
						<?php
						foreach ($linha as $listar) {
						?>

							<tr>
								<td><?= $listar->ID_CADASTRO; ?></td>
								<td><input type="text" name="nome" border: x value="<?php echo $listar->NOME_PET ?>" /></td>
								<td><input type="text" name="raca" value="<?php echo $listar->RACA_PET ?>" /></td>
								<td><input type="text" name="responsavel" value="<?php echo $listar->NOME_RESP ?>" /></td>
								<td><input type="text" name="idade" style="width: 60px;" value="<?php echo $listar->IDADE_PET ?>" /></td>
								<td><input type="text" name="tipo" value="<?php echo $listar->TIPO_PET ?>" /></td>
								<input type="hidden" name="id_pet" value="<?php echo $_GET['ID_CADASTRO'] ?>" />
								<td class="text-center">
									<input type="submit" class='btn btn-info btn-xs' style="width: 80px;" value="Salvar">
									<a href="javascript:history.back(1)" class="btn btn-danger btn-xs" style="width: 80px;">Cancelar</a>
								</td>
							</tr>

						<?php

						} //Fechamento do foreach
						?>
					</form>
				</table>
			<?php
			} // fechamento IF            
			?>

		</div>
	</div>
</body>

</html>