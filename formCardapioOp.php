<html>
	  
<head>
	<meta http-equiv="Content-Type" charset="utf-8">
	<title>Cadastro de um cardápio</title>
 <link href="css/bootstrap-select.min.css" rel="stylesheet">

</head>

<body>
<header>
	<?php
		include_once("cabecalho.php");
	?>
	</header>
	<FORM name="cadcliente" action="cadCardOp.php"
			method="POST" enctype="application/x-www-form-urlencoded">
		
			<div class="container marketing" style="background-color: white;">
				  <div class="form-group">
							<label for="listCardapio">Nome do Prato</label><br>
							 <select class="selectpicker" name="listCardapio" required> 
							 <option value="0">Selecione</option>
										<?php
											include_once("listagens.php");
											$res = lista('cardapio');
											
											while ($registro = mysqli_fetch_assoc($res)){
												$id = $registro['id_cardapio'];
												$descricao = $registro["descricao"];		
												
												echo "<option value='$id'>$id - $descricao</option>";
											}
										?>
							</select><br><br>

					<label for="listOpcoes">Opções para prato</label><br>
								<select class="selectpicker"  name="listOpcoes[]" multiple>
								
									<?php
											include_once("listagens.php");
											$res = lista('opcoes');
											
											while ($registro = mysqli_fetch_assoc($res)){
												$idOp = $registro['id_opcao'];
												$descricaoOp = $registro["descricao"];		
												
												echo "<option value='$idOp'>$idOp - $descricaoOp</option>";
											}
										?>
						</select>
		</div>
				  <input type="submit" class="btn btn-primary" value="Enviar">
				</form><br><br><br><br><br><br><br><br><br><br><br></div>
					<?php
						include_once("rodape.php");
	?>
			<script src="js/bootstrap-select.min.js"></script>

		
</script>
</body>

</html>