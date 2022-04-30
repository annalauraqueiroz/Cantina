<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="img/icon.ico">
	<link href="css/bootstrap-select.min.css" rel="stylesheet">

    <title>Cadastrar Refeição</title>
  
  <body>
  <header>
	<?php
		include_once("cabecalho.php");
	?>
	</header>
			  <FORM name="refeicao" action="cadRefeicaoBd.php"
						method="POST" enctype="application/x-www-form-urlencoded">
		<div class="container marketing" style="background-color: white;">
			  
			  <div class="form-group">
				<label for="txtIDprato">Id do cardapio</label><Br>
					<select  class="selectpicker" name="txtIDprato">
						<option value="0">Selecione</option>
						<?php
							include_once("listagens.php");
							$res = lista('cardapio');
							
							while ($registro = mysqli_fetch_assoc($res)){
								$idprato = $registro['id_cardapio'];
								$nomeprato = $registro["descricao"];		
								
								echo "<option value='$idprato'>$idprato - $nomeprato</option>";
							}
						?>
					</select>
			
			  </div>
			  
			    <div class="form-group">
				<label for="id">Id do Aluno</label><br>
					<select name="idAluno" class="selectpicker">
						<option value="0">Selecione</option>
						<?php
							include_once("listagens.php");
							$res = lista('alunos');
							
							while ($registro = mysqli_fetch_assoc($res)){
								$idaluno = $registro['id_aluno'];
								$nomealuno = $registro["nome"];		
								
								echo "<option value='$idaluno'>$idaluno - $nomealuno</option>";
							}
							 
						?>
					</select>
				
			  </div>
			  
			  
			  <input type="submit" class="btn btn-primary" value="Enviar">
			
			  <br><br><br><br><br><br>
			</form>
			</div>
		<?php
			include_once("rodape.php");
		?>
		<script src="js/bootstrap-select.min.js"></script>
  </body>
</html>
