<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM produtos WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
	<div class="page-header">
		<h1>Visualizar Galeria</h1>
	</div>
	
	<div class="row">
		<div class="pull-right">
			<a href='administrativo.php?link=9'><button type='button' class='btn btn-sm btn-success'>Editar</button></a>
			<a href='administrativo.php?link=7'><button type='button' class='btn btn-sm btn-default'>Voltar</button></a>							

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

