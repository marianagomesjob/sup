<?php

	include_once("conexao.php");
	//Executa consulta
	$result = mysql_query("SELECT * FROM produtos");
	$resultado = mysql_fetch_assoc($result);
	$foto = $resultado['imagem']; 

?>


	<div class="container theme-showcase" role="main">      
		<div class="page-header">
			<h1>Bem vindo</h1>
		</div>
		<div class="container">
        <!-- Projects Row -->
        <div class="row">
 

            <div class="row">
				<?php
					$sql = mysql_query("SELECT * FROM produtos");
						while($linha = mysql_fetch_array($sql)){
						$id = $linha["id"];
						$foto = $linha["imagem"];
						$nome = $linha["nome"];
						$descricao_longa = $linha["descricao_longa"];
				?>
				
					<div class="col-md-4 portfolio-item">
						<div class="panel panel-default">
							<img class="img-responsive" src="<?php echo "../foto/$foto"; ?>">
				
							<p align="center"><b><?php echo $linha['nome']; ?></b></p>
							<p align="center"><?php echo $linha['data']; ?></p>
							<p align="center"><?php echo $linha['descricao_longa']; ?></p>
							<p align="center"><a href="http://localhost/fotolog/adm/administrativo.php?link=8&id=2">Visualizar galeria</a></p>
							<!--Construir a view para exibir as fotos -->
						</div>	
					</div>
				<?php
					}
				?>
			</div>
        </div>
	</div> <!-- /container -->

