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
		
		$res = lista("Cardapio");
		
		$count = mysqli_num_rows($res);
		
		echo "<div class='container marketing' style='background-color: white;'>";
		echo "<h3 style='color: #FD7FFF'>O total de cardápios é: ".$count.".<br><br></h3>";
		
		echo "<table class='table'>";
		
		while ($registro = mysqli_fetch_assoc($res)){
			
			
			$id_cardapio = $registro["id_cardapio"];	
			$data = $registro['data'];
			$nome = $registro['descricao'];
			$dataConvertida = str_replace('/', '-', $data);
			$datacard = date_parse($dataConvertida);
			
			$ano = $datacard['year'];
			$mes = $datacard['month'];
			$day = $datacard['day'];
			
				echo "<tr><th scope='col' >".$nome." - ".$day."/".$mes."/".$ano."<br></th></tr>";
		
		$x = OpcoesQueOPratoTem($nome);
		while($y = mysqli_fetch_array($x)){
			$descricao = $y['descricao'];
			echo "<tr><td>".$descricao."<br></td></tr>";
		}
		
		
		}
		
		echo "</table></div>";
		
		echo "</div>";
		echo "<br><br><br><br><br><br><br><br><br><br>";
		
		include_once("desconecta.php");
		include_once("rodape.php");		
	
	?>