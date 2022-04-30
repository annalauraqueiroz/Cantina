<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Cadastro de Clientes</title>
</head>

<body>
<header>
	<?php
	
		
		include_once('cabecalho.php');
	?>
</header>
	<?php
		
		include_once("conexao.php");
		
		echo "<div class='container marketing' style='background-color: white;'>";
		

		$nomeprato = trim($_POST["txtNomeprato"]);
		$data = trim($_POST["txtData"]);
		
		$camposOk = true;
					
	
		
		if($nomeprato == null) {
			echo "<p style='color:red;'> O nome do prato não foi informado." . "</p><BR>";
			$camposOk = false;
		} 
	     if($data == null) {
			echo "<p style='color:red;'> A data não foi informada." . "</p><BR>";
			$camposOk = false;
		} 
		
		
		
		if($camposOk == true){
			echo "<h2 style='color: #FD7FFF; text-align:center'>Os dados informados foram:</h2>";
			
			echo "<p style='color: #16222A;'> Nome do prato: $nomeprato</p><BR>";
			
		
			$dataConvertida = str_replace('/', '-', $data);
			$datacard = date_parse($dataConvertida);
			
			$ano = $datacard['year'];
			$mes = $datacard['month'];
			$day = $datacard['day'];
			
			echo "<p style='color: #16222A;'>Data do prato: $day/$mes/$ano</p><BR>";
			
			
			$sql = "INSERT INTO Cardapio ( descricao, data)
				VALUES ('".$nomeprato."','".$data."');";
				
			echo "<br><h4 style='color: #FD7FFF; text-align:center'> Prato inserido no banco com sucesso.</h4>";
			
			$res = mysqli_query($con, $sql)  
			or die("<br><h4 style='color: #FD7FFF; text-align:center'>Prato não inserido no banco. Erro: <br></h4>" . mysqli_error($con));
		}else{
			echo "<br><h4 style='color: #FD7FFF; text-align:center'> Prato não inserido no banco.</h4>";
		
		
		
		}	
		
		echo "<form action='formCardapio.php'>";
		echo "<input type='submit' class='btn btn-primary' value='Voltar'";
		echo "</div>";
		echo "</form><br><br><br><br><br><br><br><br><br><br>";

		include_once('rodape.php');
   ?>		
	
	 
</body>

</html>