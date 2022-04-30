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
		
		

		$nome = trim($_POST['nome']);
		$VN = trim($_POST['VN']);
	
		if($nome == null){
			echo "<p style='color:red;'>Campo nome não informado" . "<BR></p>";
				$camposOk = false;
			
		}
		
		if($VN == null){
			echo "<p style='color:red;'>Campo valor nutritivo não informado" . "<BR></p>";
				$camposOk = false;
			
		}
		
		if($camposOk == true){
			echo "<h2 style='color: #FD7FFF; text-align:center'>Os dados informados foram:<Br></h2><br>";
			
		
			echo "<p style='color: #16222A;'>Nome/ Descrição do produto: $nome</p><BR>";
			echo "<p style='color: #16222A;'>Valor nutritivo do produto: $VN</p><BR>";
			
			$sql = "INSERT INTO Opcoes (descricao,valor_nutritivo)
				VALUES ('".$nome."',".$VN.");";
			
			$res = mysqli_query($con, $sql)  
			or die("<br><h4 style='color: #FD7FFF; text-align:center'> Opção não inserido no banco.</h4>Erro ao inserir:" . mysqli_error($con));
		}else{
			echo "<br><h4 style='color: #FD7FFF; text-align:center'> Dados não inseridos no banco.</h4>";
		
		
		
		}
		echo "<form action='formOpcao.php'>";
		echo "<button type='submit' class='btn btn-primary'>Voltar</button>";
		echo "</div>";
		echo "</form><br><br><br><br><br><br><br><br><br><br>";
		
		
		
		include_once("rodape.php");
	?>