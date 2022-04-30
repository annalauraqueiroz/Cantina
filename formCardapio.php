<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Cadastro dos Itens</title>
	
</head>

<body>
<header>
	<?php
		include_once("cabecalho.php");
	?>
	</header>
	<FORM name="cadcliente" action="cadItensbd.php"
			method="POST" enctype="application/x-www-form-urlencoded">
		<form>
			<div class="container marketing" style="background-color: white;">
				  <div class="form-group">
					<label for="exampleInputPassword1">Nome do prato</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite o nome do prato" name="txtNomeprato">
				  </div>
				  
				
				  <div class="form-group">
					<label for="exampleInputPassword1">Data</label>
					<input type="date" class="form-control" id="exampleInputPassword1" placeholder="Digite a data " name="txtData">
				  </div>
				   
				  <input type="submit" class="btn btn-primary" value="Enviar">
				    </div></div>
				  
				</form><br><br><br><br><br><br><br><br><br><br><br>
					<?php
						include_once("rodape.php");
	?>
			
</body>

</html>