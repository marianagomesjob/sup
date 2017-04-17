<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM produtos WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
	$id_produto = $resultado['id'];
?>
	<div class="container theme-showcase" role="main">      
		<div class="page-header">
			<h1>Editar fotos da Galeria</h1>
		</div>
		<div class="row">
			<div class="pull-right">
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
		<br>
			<div class="container">  
				<form id="uploadForm" action="processa/proc_edit_mult.php" method="post">  
					<div id="gallery"></div><div style="clear:both;"></div><br /><br />  
					<div class="col-md-4" align="right">  
						<label>Upload Multiple Image</label>  
					</div>  
					<div class="col-md-4">  
						<input name="files[]" type="file" multiple />  
					</div>  
					<div class="col-md-4">  
						<input type="submit" submitvalue="Submit" />  
					</div>  
					<div style="clear:both"></div>  
				</form>  
			</div>
	</div>
	</div>
</div> <!-- /container -->
<script>
$(document).ready(function(){
    $('#uploadForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST", //O type que faltava
            url: "processa/proc_edit_mult.php",
            processData: false, //Aqui tem que ser false para pode enviar FormData
            contentType: false,
            data: new FormData(this),
            success: function(data){
                $("#galley").html(data);
                alert("imagem foi");
            },
            error: function(a, b, c) { //Isto ser para tratar erros de HTTP ou conexão
                alert([a, b, c]);
            }
        });
    });
});
</script>