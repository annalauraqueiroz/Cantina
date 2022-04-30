<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="img/icon.ico">


    <title>Cantina Tudo de Bom</title>
</head>
<body>
	<header>
	<?php
		include_once("cabecalho.php");
	?>
	</header>
	<?php
	include_once("conexao.php");
		echo "<div class='container marketing' style='background-color: white;'>";
		
		$camposOk = true;
		
		$idcardapio = $_POST["txtIDprato"];	
		$idaluno = $_POST["idAluno"];
		
				
		
		if($idcardapio == 0){
			echo "<p style='color:red;'>O ID do cardápio não foi informado.</p>"; 
			$camposOk = false;
		}	
		
		if($idaluno == 0){
			echo "<p style='color:red;'>O ID do aluno não foi informado.</p>"; 
			$camposOk = false;
		}	
		
		
		if($camposOk == true){
			echo "<h2 style='color: #FD7FFF; text-align:center'>Os dados informados foram:<br></h2><br>";
			
			
			echo "<p style='color: #16222A;'>ID do cardapio: $idcardapio<BR></p>";
			echo "<p style='color: #16222A;'>ID do aluno : $idaluno<BR></p>";
			
			
			$sql = "INSERT INTO refeicao_aluno (id_cardapio, id_aluno )
				VALUES (".$idcardapio.", ".$idaluno.");";
			
			$res = mysqli_query($con, $sql)  
			or die("<br><h4 style='color: #FD7FFF; text-align:center'> Refeicao não inserida no banco.</h4>Erro ao inserir:" . mysqli_error($con));
		}else{
			echo "<br><h4 style='color: #FD7FFF; text-align:center'> Refeicao não inserida no banco.</h4>";
		
		
		
		}
		echo "<form action='formRefeicao.php'>";
		echo "<button type='submit' class='btn btn-primary'>Voltar</button>";
		echo "</div>";
		echo "</form><br><br><br><br><br><br><br><br><br><br>";
		
	
		
		
			include_once("rodape.php");
		
	?>
	</body>
	</html>