<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="img/icon.ico">


    <title>Cadastrar Aluno</title>

<?php
	//include_once("cssImport.php");
?>
  
  <body>
  <header>
	<?php
		include_once("cabecalho.php");
	?>
	</header>
			  <FORM name="cadAluno" action="cadAlunoBd.php"
						method="POST" enctype="application/x-www-form-urlencoded">
		<div class="container marketing" style="background-color: white;">
			  
			  <div class="form-group">
				<label for="NomeAluno">Nome Completo</label>
				<input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Digite o nome completo do aluno.">
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
