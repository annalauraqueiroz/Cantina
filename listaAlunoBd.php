<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="img/icon.ico">


    <title>Alunos cadastrados</title>
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
		
		$res = lista("Alunos");
		
		$count = mysqli_num_rows($res);
		
		echo "<div class='container marketing' style='background-color: white;'>";
		echo "<h3 style='color: #FD7FFF'>O total de alunos é: ".$count.".<br><br></h3>";
		
		echo "<table class='table'>";
		echo "<tr>";		
		echo "<th scope='col'>ID do Aluno</td><th scope='col'>Nome do Aluno</td>";
		echo "</tr>";
		
		while ($registro = mysqli_fetch_assoc($res)){

			$id = $registro['id_aluno'];
			$nome = $registro["nome"];		
			
			echo "<tr>";		
			echo "<td>".$id."</td><td>".$nome."</td>";
			echo "</tr>";
		}
		
		echo "</table></div>";
		
		echo "</div>";
		echo "<br><br><br><br><br><br><br><br><br><br>";
		
		include_once("desconecta.php");
		include_once("rodape.php");		
	
	?>