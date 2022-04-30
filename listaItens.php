<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta charset="utf-8">
	<link rel="icon" href="img/icon.ico">


    <title>Itens cadastrados</title>
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
		
		$res = lista("Cardapio");
		
		$count = mysqli_num_rows($res);
		
		echo "<div class='container marketing' style='background-color: white;'>";
		echo "<h3 style='color: #FD7FFF'>Total de pratos: ".$count.".<br><br></h3>";
		
		echo "<table class='table'>";
		echo "<tr>";		
		echo "<th scope='col'>ID do Item</th><th scope='col'>Nome do Item</th><th scope='col'>Data </th>";
		echo "</tr>";
		
		while ($registro = mysqli_fetch_assoc($res)){

			$id = $registro['id_cardapio'];
			$nome = $registro["descricao"];	
			$data = $registro['data'];
			$dataConvertida = str_replace('/', '-', $data);
			$datacard = date_parse($dataConvertida);
			
			$ano = $datacard['year'];
			$mes = $datacard['month'];
			$day = $datacard['day'];
			
			echo "<tr>";		
			echo "<td>".$id."</td><td>".$nome."</td><td>".$day."/".$mes."/".$ano."</td>";
			echo "</tr>";
		}
		
		echo "</table></div>";
		
		echo "</div>";
		echo "<br><br><br><br><br><br><br><br><br><br>";
		
		include_once("desconecta.php");
		include_once("rodape.php");		
	
	?>