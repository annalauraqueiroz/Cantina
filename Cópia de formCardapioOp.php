<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Cadastro de um cardápio</title>
	
</head>

<body>
<header>
	<?php
		include_once("cabecalho.php");
	?>
	</header>
	<FORM name="cadcliente" action="cadCardapioOpbd.php"
			method="POST" enctype="application/x-www-form-urlencoded">
		<form>
				<div class="container marketing" style="background-color: white;">
				  <div class="form-group">
					<label for="exampleInputEmail1">ID do Cardápio completo</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o ID do cardápio" name="IDCard">

				  </div>
				  <div class="form-group">
							<label for="listCardapio">Nome do Prato</label>
							 <select class="custom-select d-block my-3" name="listCardapio" required> 
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
							</select>

		<!-- <div class="ui form">
				  <div class="field">
						<label>Opções</label>
						 <select multiple="" class="ui dropdown" name="listOpcoes"> 
						 <option value="0">Selecione</option>
									<?php
										include_once("listagens.php");
										$res = lista('opcoes');
										
										while ($registro = mysqli_fetch_assoc($res)){
											$id = $registro['id_opcao'];
											$descricao = $registro["descricao"];		
											
											echo "<option value='$id'>$descricao</option>";
										}
									?>
						</select>--></div>
				  <button type="submit" class="btn btn-primary">Enviar</button></div>
				</form><br><br><br><br><br><br><br><br><br><br><br>
					<?php
						include_once("rodape.php");
	?>
	
			
</body>

</html>