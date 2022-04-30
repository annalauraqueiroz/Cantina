<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta charset="utf-8">
	<link rel="icon" href="img/icon.ico">


    <title>Produtos cadastrados</title>
</head>
<body>
	<header>
	<?php
		include_once("cabecalho.php");
	?>
	</header>
	<?php
	include_once("conexao.php");
	include_once("listagens.php");		
		
		$res = lista("Opcoes");
		
		$count = mysqli_num_rows($res);
		
		echo "<div class='container marketing' style='background-color: white;'>";
		echo "<h3 style='color: #FD7FFF'>O total de opções é: ".$count.".<br><br></h3>";
		
		echo "<table class='table'>";
		echo "<tr>";		
		echo "<th scope='col'>ID da Opção</th><th scope='col'>Nome da Opção</th><th scope='col'>Valor Nutritivo</th>";
		echo "</tr>";
		
		while ($registro = mysqli_fetch_assoc($res)){

			$id = $registro['id_opcao'];
			$nome = $registro["descricao"];	
			$vn = $registro['valor_nutritivo'];
			
			echo "<tr>";		
			echo "<td>".$id."</td><td>".$nome."</td><td>".$vn."</td>";
			echo "</tr>";
		}
		
		echo "</table></div>";
		
		echo "</div>";
		echo "<br><br><br><br><br><br><br><br><br><br>";
		
		include_once("desconecta.php");
		include_once("rodape.php");		
	
	?>