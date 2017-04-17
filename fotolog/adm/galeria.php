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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">FotologEnfil</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Acesso</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
	<div class="container theme-showcase" role="main">      
		<div class="container">
        <!-- Projects Row -->
      
 

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
							<p align="center"> <?php echo $linha['data']; ?></p>
							<p align="center"> <?php echo $linha['descricao_longa']; ?></p>
							<p align="center"><a href="view_galeria.php">Visualizar galeria</a></p>
							<!--Construir a view para exibir as fotos -->
						</div>	
					</div>
				<?php
					}
				?>
			</div>
      </div>
	</div> <!-- /container -->





        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

	</html>