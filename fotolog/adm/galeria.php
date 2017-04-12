<?php
	session_start();
	include_once("conexao.php");
	//Executa consulta
	$result = mysql_query("SELECT * FROM produtos");
	$resultado = mysql_fetch_assoc($result);
	$foto = $resultado['imagem']; 
?>

<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/galeria.css" type="text/css">

	</head>
	<body>
        <div class="navbar navbar-default navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img height="20" alt="Brand" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Galeria de Imagens Enfil<br></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
		    <div class="container">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-1 control-label">Data</label>
						<div class="col-sm-3">
							<input type="Week" class="form-control" name="description" placeholder="Description" value="<?php echo $resultado['description']; ?>">
						</div>
				</div>			
			</div>
			</br>
			

			
            <div class="container">
                <div class="row">
					<?php
						$sql = mysql_query("SELECT * FROM produtos");
						while($linha = mysql_fetch_array($sql)){
							$id = $linha["id"];
							$foto = $linha["imagem"];
							$nome = $linha["nome"];
							$descricao_curta = $linha["descricao_curta"];
				?>
                    <div class="col-md-3">
                        <a class="btn" data-toggle="modal" data-target="#galeria">
							<img src="<?php echo "../foto/$foto"; ?>" width="168" height="168">
						</a>
						<div class="container">
							<h3><?php echo $linha['nome']; ?></h3>
						<p><?php echo $linha['descricao_curta']; ?></p>	
						</div>
                    </div>
						
					<?php
						}
					?>
				</div>
            </div>
        </div>
        <footer class="section section-success">
            <div class="background-image"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Footer header</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-info text-right">
                            <br>
                            <br>
                        </p>
                        <div class="row">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-right">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="galeria">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Galeria</h4>
                    </div>
                    <div class="modal-body">
                        <div id="fullcarousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
									<img src="<?php echo "../foto/$foto"; ?>" width="166" height="168">
									<div class="carousel-caption">
                                        <h2>Title</h2>
                                        <p>Description</p>
                                    </div>
                                </div>
								
								<?php
								$sql = mysql_query("SELECT * FROM produtos");
									while($linha = mysql_fetch_array($sql)){
										$id = $linha["id"];
										$foto = $linha["imagem"];
										$nome = $linha["nome"];
										$descricao_curta = $linha["descricao_curta"];
								?>
								 <div class="item">
									<img src="<?php echo "../foto/$foto"; ?>" width="166" height="166">
									<div class="carousel-caption">
										<h2><?php echo $linha['nome']; ?></h2>
										<p><?php echo $linha['descricao_curta']; ?></p>	
                                    </div>
								</div>
						
								<?php
									}
								?>
								
                           </div>
                            <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
	</html>