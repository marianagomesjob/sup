<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM produtos WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
	$id_produto = $resultado['id'];
?>
	<div class="container theme-showcase" role="main">      
		<div class="page-header">
			<h1>Editar Galeria</h1>
		</div>
		
		<div class="row">
			<div class="pull-right">
				<a href='administrativo.php?link=9'><button type='button' class='btn btn-sm btn-success'>Editar</button></a>
				<a href='administrativo.php?link=7'><button type='button' class='btn btn-sm btn-default'>Voltar</button></a>							

			</div>
		</div>
		<br>
		<div class="container">
			<form class="form-horizontal" method="POST" action="processa/proc_edit_upload.php" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nome da imagem</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nome" placeholder="" value="<?php echo $resultado['nome']; ?>">
							</div>
					</div>					
				</div>
				<div class="row">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Descrição Longa</label>
						<div class="col-sm-8">
							<textarea class="form-control " rows="5" name="descricao_longa" placeholder="Descrição longa do produto"><?php echo $resultado['descricao_longa']; ?></textarea>
						</div>
					</div>				
				</div>
				<div class="row">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="tag" placeholder="Tag" value="<?php echo $resultado['tag']; ?>">
						</div>
					</div>				
				</div>				
				<div class="row">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Data</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="data" placeholder="data" value="<?php echo $resultado['data']; ?>">
						</div>
					</div>				
				</div>				
			
				<div class="row">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Foto de capa (500x500)</label>
						<div class="col-sm-8">
							<input name="arquivo" type="file"/>	
						</div>
					</div>
					  <?php 
					  $foto = $resultado['imagem'];
					  if($foto == ""){
						  ?>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">	
									Foto Antiga
								</label>
								<div class="col-sm-8">
									O produto não possui imagem
								</div>
							</div>
						<?php
					  }
					  if($foto != ""){?>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">	
									Foto de capa da galeria
								</label>
								<div class="col-sm-8">
									<img src="<?php echo "../foto/$foto"; ?>" width="100" height="100">
									<input type="hidden" name="img_antiga" value='<?php echo $foto ?>'>
								</div>
							</div>
					  <?php } ?>

					  <input type="hidden" name="id" value="<?php echo $id_produto;?>">
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-success">Salvar</button>
						</div>
					  </div>	
				</div>
		
			</form>
		</div>
	</div>
</div> <!-- /container -->

