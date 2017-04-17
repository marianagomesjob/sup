<?php
	session_start();
	include_once("conexao.php");
	//Executa consulta
	$result = mysql_query("SELECT * FROM produtos");
	$resultado = mysql_fetch_assoc($result);
	$foto = $resultado['imagem']; 
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="data" content="">
		<meta name="author" content="">

		<title>FotologEnfil</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			body {
				padding-top: 70px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
			}

			.portfolio-item {
				margin-bottom: 25px;
			}

			footer {
				margin: 50px 0;
			}
		</style>

	</head>

	<body>

		<div class="container theme-showcase" role="main">      
			<div class="page-header">
				<h1>Visualizar Galeria</h1>
			</div>
			
			<div class="row">
				<div class="pull-right">

					<a href="galeria.php"><button type='button' class='btn btn-sm btn-default'>Voltar</button></a>							

				</div>
			</div>
			<br>
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">ID</label>
								<div class="col-sm-10">
									<?php echo $resultado['id']; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nome da Imagem</label>
								<div class="col-sm-10">
									<?php echo $resultado['nome']; ?>
								</div>
							</div>
						</div>					
						<div class="row">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Descricao</label>
								<div class="col-sm-10">
									<?php echo $resultado['descricao_longa']; ?>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
								<div class="col-sm-10">
									<?php echo $resultado['tag']; ?>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Data</label>
								<div class="col-sm-10">
									<?php echo $resultado['data']; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Capa da Galeria</label>
								<div class="col-sm-10">
									<?php $foto = $resultado['imagem']; ?>
									<img src="<?php echo "../foto/$foto"; ?>" width="100" height="100">
								</div>
							</div>
						</div>					
					</div>
				</div>

			</div>
			
			<div class="container">
			<h2>Lista de imagens</h2>
			<hr>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-3">
								<?php $foto = $resultado['imagem']; ?>
								<img src="<?php echo "../foto/$foto"; ?>" width="100" height="100">
								
							</div>
							<div class="col-sm-3">
								<?php $foto = $resultado['imagem']; ?>
								<img src="<?php echo "../foto/$foto"; ?>" width="100" height="100">
							</div>	
							<div class="col-sm-3">
								<?php $foto = $resultado['imagem']; ?>
								<img src="<?php echo "../foto/$foto"; ?>" width="100" height="100">
							</div>		
							<div class="col-sm-3">
								<?php $foto = $resultado['imagem']; ?>
								<img src="<?php echo "../foto/$foto"; ?>" width="100" height="100">
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /container -->
		</body>
	</html>
