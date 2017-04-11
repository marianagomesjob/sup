<!--Novo-->
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Cadastrar Upload</h1>
  </div>
	<div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=7&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_upload.php" enctype="multipart/form-data">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome da Imagem</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="nome" placeholder="Nome do Produto">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição do projeto</label>
			<div class="col-sm-10">
				<textarea class="form-control ckeditor" rows="5" name="descricao" placeholder="Descrição curta do projeto"></textarea>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição Longa</label>
			<div class="col-sm-10">
				<textarea class="form-control ckeditor" rows="5" name="descricao_longa" placeholder="Descrição longa do produto"></textarea>
			</div>
		  </div>
		  

		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="tag" placeholder="Tag">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Data</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="description" placeholder="Description">
			</div>
		  </div>
		  
		  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Foto do Produto (500x500)</label>
				<div class="col-sm-10">
					<input name="arquivo[]" type="file"/>	
					<input name="arquivo[]" type="file"/>	
					<input name="arquivo[]" type="file"/>	
					<input name="arquivo[]" type="file"/>	
					<input name="arquivo[]" type="file"/>	
				</div>
		  </div>
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

