<?php
	$resultado=mysql_query("SELECT * FROM produtos ORDER BY 'id'");
	$linhas=mysql_num_rows($resultado);

	include_once("../config/config.php");

?>	


<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Lista de Galeria</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href="administrativo.php?link=6"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <table class="table table-bordered">
		<thead>
		  <tr>
			<th class="tb_titulo">ID</th>
			<th class="tb_titulo">Data</th>
			<th class="tb_titulo">Nome</th>
			<th class="tb_titulo">Ações</th>
		  </tr>
		</thead>
		<tbody>
			<?php 
				while($linhas = mysql_fetch_array($resultado)){
					echo "<tr>";
						echo "<td class='tb_titulo'>".$linhas['id']."</td>";
						echo "<td class='tb_titulo'>".$linhas['data']."</td>";
						echo "<td class='tb_titulo'>".$linhas['nome']."</td>";

						?>

						<td class='tb_titulo'> 
					
						<a href='administrativo.php?link=9&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-warning btn-sm'>Editar</button></a>
						
						<a href='processa/proc_apagar_upload.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-danger btn-sm'>Apagar</button></a>
						
							<a href='administrativo.php?link=9&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-default btn-sm'>Admin</button></a>
						
						
						<?php
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
	</div>
</div> <!-- /container -->

