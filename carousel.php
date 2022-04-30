<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/carne.jpg" alt="comida" style="width:100%;">
		 <div class="carousel-caption text-left">
                <h1>Os melhores ingredientes, o melhor preço.</h1>
                <p>Nosso restaurante trabalha com ingredientes selecionados e de melhor qualidade,
				para garantir o melhor sabor. Contamos também com o prato do dia, que possui ótimo preço e sabor.</p>
                <p><a class="btn btn-lg btn-primary" href="listaCardapioBd.php" role="button">Ver Opções para Prato</a></p>
              </div>
      </div>

      <div class="item">
        <img src="img/belga.png" alt="cantina" style="width:100%;">
		 <div class="carousel-caption text-left">
                <h1>Doces de dar água na boca.</h1>
                <p>Além do prato principal, servimos as melhores sobremesas pelo melhor preço. Na promoção do dia, 
				cada um prato tem direito a uma sobremesa de escolha do cliente.* </p>
                <p><a class="btn btn-lg btn-primary" href="formRefeicao.php" role="button">Realizar Pedido</a></p>
              </div>
      </div>
    
      <div class="item">
        <img src="img/foto.jpg" alt="sobremesa" style="width:100%;">
		 <div class="carousel-caption text-left">
                <h1>Um lugar confortável para uma boa refeição.</h1>
                <p>Nosso restaurante trabalha até nos mínimos detalhes para garantir o conforto na hora da refeição.
				Nos preocupamos em lhe servir nas melhores condições e para quaisquer ocasiões.</p>
                <p><a class="btn btn-lg btn-primary" href="formAluno.php" role="button">Me Cadastrar</a></p>
              </div>
      </div>
    </div>
	

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</body>
</html>