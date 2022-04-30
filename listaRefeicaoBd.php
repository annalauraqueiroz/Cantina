<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta charset="utf-8">
	<link rel="icon" href="img/icon.ico">
	<style>
	.card-columns {
		  @include media-breakpoint-only(lg) {
			column-count: 4;
		  }
		  @include media-breakpoint-only(xl) {
			column-count: 5;
		  }
		  
	}
</style>


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
		
		$res = lista("Refeicao_Aluno");
		
		
		
		echo "<div class='container marketing' style='background-color: white;'>";
		echo "<h3 style='color: #4ECDC4'> Refeições Servidas <br><br></h3>";
		
		echo "<table class='table'>";
		echo "<tr>";

	//echo '<div class="card text-center">';
	//encontrando o ID e descricao dos pratos que foram servidos 
	$z = descricao();
		while($o = mysqli_fetch_assoc($z)){
			
			$idPrato = $o['id_cardapio'];
			$descricao = $o['descricao'];
			$data = $o['data'];
			
			echo '<div class="card text-center" style="width: 60%;";>';
			$dataConvertida = str_replace('/', '-', $data);
			$datacard = date_parse($dataConvertida);
			
			$ano = $datacard['year'];
			$mes = $datacard['month'];
			$day = $datacard['day'];
			
			
			echo '<div class="card-body" >
					  <h4 class="card-title" style="color:#FE4365";>'.$idPrato." - ". $descricao." - ".$day."/".$mes."/".$ano.'</h4><Br>';
			
			
			
			//pega as opcoes que tal prato tem
				$x = OpcoesQueOPratoTem($descricao);
				while($y = mysqli_fetch_array($x)){
					$p = $y['descricao'];
				echo '<p class="card-text" style="color:#031634";>'.$p.';</p>';
				
				}
		
		echo'  <p style="color:#BD1550";><b style="font-size: 12px";><br>Alunos Que Comeram:</b></p>';
		
		//encontra os alunos que comeram tal cardapio
			$alunosQComeram = AlunosQueComeram($idPrato);
			while($var = mysqli_fetch_array($alunosQComeram)){
				$NomeAluno = $var['nome'];
				echo'  <p class="card-text"><small style="color: #542437";>'.$NomeAluno.'</small></p>';
			}
			echo "<br>";
			echo '</div>
				  </div><BR>';		
					
		}
						
		
				
			echo "</tr>";
		echo "</table></div>";
		
		echo "</div>";
		echo "<br><br><br><br><br><br><br><br><br><br>";
		
		include_once("desconecta.php");
		include_once("rodape.php");		
	
	?>
</body>
</html>