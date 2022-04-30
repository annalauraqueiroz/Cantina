<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta charset="utf-8">
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
	include_once("listagens.php");
											
		echo "<div class='container marketing' style='background-color: white;'>";
		$camposOk = true;
		
		

		$cardapio = $_POST['listCardapio'];
		
		
		
		
		if($cardapio == 0){
			echo "<p style='color:red;'>Campo nome do prato não informado" . "<BR></p>";
				$camposOk = false;
			
		}
		
		if(isset($_POST['listOpcoes'])){
			$opcoes = $_POST['listOpcoes'];
			
		}else{
			echo "<p style='color:red;'>Campo opções não informado. Insira ao menos uma opção para continuar" . "<BR></p>";
				$camposOk = false;
		}
		

		if($camposOk == true){
			$res = nomeCampo($cardapio, 'cardapio', 'id_cardapio');
				$registro = $res;	
					$NomePrato = $registro["descricao"];
					
				
			echo "<h2 style='color: #FD7FFF; text-align:center'>Os dados informados foram:<Br></h2><br>";
			
		
			echo "<p style='color: #16222A;'>ID e nome do prato: ".$cardapio." - ".$NomePrato."</p><BR>";
			echo "<p style='color: #16222A;'> Opções escolhidas:</p><BR>";
			
			foreach($opcoes as $op){
				$resOp = nomeCampo($op, 'opcoes', 'id_opcao');
				$registroOp = $resOp;	
					$NomeOpcao = $registroOp["descricao"];
			echo "<p style='color: #16222A;'>  ".$op." - ".$NomeOpcao."</p><br>";
			
			$sql = "INSERT INTO Cardapio_Opcoes (id_cardapio, id_opcao)
				VALUES (".$cardapio.",".$op.");";
			
			$res = mysqli_query($con, $sql)  
			or die("<br><h4 style='color: #FD7FFF; text-align:center'> Campos não inserido no banco.</h4>Erro ao inserir:" . mysqli_error($con));
			}
		}else{
			echo "<br><h4 style='color: #FD7FFF; text-align:center'> Dados não inseridos no banco.</h4>";
		
		
		
		}
		echo "<form action='formCardapioOp.php'>";
		echo "<input type='submit' class='btn btn-primary' value='Voltar'";
		echo "</div>";
		echo "</form><br><br><br><br><br><br><br><br><br><br>";
		
		
		
		include_once("rodape.php");
	?>