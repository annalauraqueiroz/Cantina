<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="img/icon.ico">


    <title>Cadastrar Produto(Opção)</title>

<?php
	//include_once("cssImport.php");
?>
  
  <body>
  <header>
	<?php
		include_once("cabecalho.php");
	?>
	</header>
			  <FORM name="cadOpcao" action="cadOpcaoBd.php"
						method="POST" enctype="application/x-www-form-urlencoded">
						
		<div class="container marketing" style="background-color: white;">
			  <div class="form-group">
				<label for="NomeOpcao">Como você deseja chamar sua opção?</label>
				<input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Digite o nome da opção.">
			  </div>
			  
			   <div class="form-group">
				<label for="ValorNutritivo">Qual o valor nutritivo da sua opção?</label>
				<input type="text" name="VN" class="form-control" id="exampleInputPassword1" placeholder="Digite o valor nutritivo sem letras e em gramas.">
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Enviar</button>
			  <br><br><br><br><br><br>
			</form>
			</div>
		<?php
			include_once("rodape.php");
		?>
  </body>
</html>
