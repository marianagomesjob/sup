<?php

$nome = $_POST["nome"];
$descricao_curta = $_POST["descricao_curta"];
$descricao_longa = $_POST["descricao_longa"];
$preco = $_POST["preco"];
$tag = $_POST["tag"];
$description = $_POST["description"];
$numeroCampos = 5;

$tamanhoMaximo = 1000000;

$extensoes = array(".png",".PNG", ".jpg", ".jpeg", ".gif");

$caminho = "../../foto/";

$substituir = false;
 
for ($i = 0; $i < $numeroCampos; $i++) {
	
	
	$nomeArquivo = $_FILES["arquivo"]["name"][$i];
	$tamanhoArquivo = $_FILES["arquivo"]["size"][$i];
	$nomeTemporario = $_FILES["arquivo"]["tmp_name"][$i];
	
	
	if (!empty($nomeArquivo)) {
	
		$erro = false;
	
		
		if ($tamanhoArquivo > $tamanhoMaximo) {
			$erro = "O arquivo " . $nomeArquivo . " não deve ultrapassar " . $tamanhoMaximo. " bytes";
		} 
		
		elseif (!in_array(strrchr($nomeArquivo, "."), $extensoes)) {
			$erro = "A extensão do arquivo <b>" . $nomeArquivo . "</b> não é válida";
		} 
		
		elseif (file_exists($caminho . $nomeArquivo) and !$substituir) {
			$erro = "O arquivo <b>" . $nomeArquivo . "</b> já existe";
		}
	
		
		if (!$erro) {
			
			move_uploaded_file($nomeTemporario, ($caminho . $nomeArquivo));
			
			$query = mysql_query("INSERT INTO produtos (
nome,
descricao_curta,
descricao_longa,
preco,
tag,
description,
imagem,
created) VALUES(
'$nome',
'$descricao_curta',
'$descricao_longa',
'$preco',
'$tag',
'$description',
'$nome_final',
NOW())");
echo "
<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/fotolog/adm/administrativo.php?link=7'>
<script type=\"text/javascript\">
alert(\"Produto cadatrado com Sucesso.\");
</script>
"; 
		} 
		
		else {
			
			echo $erro . "<br />";
		}
	}
}
?>