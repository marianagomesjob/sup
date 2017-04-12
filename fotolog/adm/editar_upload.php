<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM produtos WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
	$id_produto = $resultado['id'];
?>
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Editar Produto</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=7&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Voltar</button></a>
			
			<a href='processa/proc_apagar_produto.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_edit_upload.php" enctype="multipart/form-data">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome da imagem</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="nome" placeholder="" value="<?php echo $resultado['nome']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição Curta</label>
			<div class="col-sm-10">
				<textarea class="form-control ckeditor" rows="5" name="descricao_curta" placeholder="Descrição curta do produto"><?php echo $resultado['descricao_curta']; ?></textarea>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição Longa</label>
			<div class="col-sm-10">
				<textarea class="form-control ckeditor" rows="5" name="descricao_longa" placeholder="Descrição longa do produto"><?php echo $resultado['descricao_longa']; ?></textarea>
			</div>
		  </div>
		  

		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="tag" placeholder="Tag" value="<?php echo $resultado['tag']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Data</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="description" placeholder="Description" value="<?php echo $resultado['description']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Foto do Produto (500x500)</label>
				<div class="col-sm-10">
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
					<div class="col-sm-10">
						O produto não possui imagem
					</div>
				</div>
			<?php
		  }
		  if($foto != ""){?>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">	
						Foto do Produto Antiga
					</label>
					<div class="col-sm-10">
						<img src="<?php echo "../foto/$foto"; ?>" width="100" height="100">
						<input type="hidden" name="img_antiga" value='<?php echo $foto ?>'>
					</div>
				</div>
		  <?php } ?>


		  
		  <input type="hidden" name="id" value="<?php echo $id_produto;?>">
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Editar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

