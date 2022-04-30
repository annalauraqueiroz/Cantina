<html lang="en">
  <head>
   
    <title>Cantina Tudo de Bom</title>

<?php
	include_once("Scripts.php");
?>
  
  <body>
  <header>
	<?php
		include_once("cabecalho.php");
	?>
	</header>
      <div class="container marketing" style="background-color: white;">
	  <?php
		
		include_once("carousel.php");
	?><br>
       
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">A melhor batata frita<span class="text-muted"><br>É a da cantina tudo de bom.</span></h2>
            <p class="lead">Deliciosas batatas selecionadas, fritas, crocantes por fora, macias por dentro, douradas, irresistíveis, saborosas, famosas, e todos os outros adjetivos positivos que você quiser dar.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/batata-frita.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh my god! <span class="text-muted">Você já viu essa carne maravilhosamente suculenta?</span></h2>
            <p class="lead">Impossível resistir aos nossos sabores, os produtos de alta qualidade são vistos pelo maravilhoso sabor. Experimente ao menos uma de nossas carnes, e prometo que não se arrependerá!</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="img/carne2.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Qual a sua sobremesa favorita? <span class="text-muted">E porque nosso brownie com sorvete?</span></h2>
            <p class="lead">Bom demais. Ninguém consegue resistir a isso. A massa quentinha do brownie faz uma explosão de um sabor maravilhoso com o sorvete, que por acaso pode ser o seu favorito também, ok?</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/brownie.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->

		<?php
			include_once("rodape.php");
		?>
  </body>
</html>
