<html lang="en">
  <head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <link rel="icon" href="img/icon.ico">
  </head>

  <body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding: 1px 430px;>
  <!-- Brand -->
 

  <!-- Links --><br>
  <ul class="navbar-nav" >
  
  <li class="nav-item dropdown" style=" margin: 10px;">
      <a class="nav-link dropdown-toggle" href="cardapio.php" id="navbardrop" data-toggle="dropdown" style="color: white;">
        <p  style=" word-spacing: 50px;">Cardápio</p>
      </a>

      <div class="dropdown-menu">
        <a class="dropdown-item" href="listaCardapioBd.php">Cardápio</a>
        <a class="dropdown-item" href="formCardapio.php">Cadastrar Prato</a>
		<a class="dropdown-item" href="formCardapioOp.php">Cadastrar Cardápio</a>
		<a class="dropdown-item" href="listaItens.php">Listar Pratos</a>
      </div>
    </li>
	<li class="nav-item dropdown" style=" margin: 10px;">
      <a class="nav-link dropdown-toggle" href="alunos.php" id="navbardrop" data-toggle="dropdown" style="color: white;">
        <p  style=" word-spacing: 50px;">Alunos</p>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="formAluno.php">Cadastrar Aluno</a>
        <a class="dropdown-item" href="listaAlunoBd.php">Alunos Cadastrados</a>
      </div>
    </li>
	
    <li class="nav-item" >
      <a class="nav-link" href="inicio.php"><img src='img/iconpng.png'></a>
    </li>

    <!-- Dropdown -->
   
	
	
	<li class="nav-item dropdown" style=" margin: 10px;">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: white;">
      <p  style=" word-spacing: 50px;">Produtos</p> 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="formOpcao.php">Cadastrar</a>
        <a class="dropdown-item" href="listaOpcoesBd.php">Consultar Estoque</a>
      </div>
    </li>
	
	<li class="nav-item dropdown" style=" margin: 10px;">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: white;">
        <p  style=" word-spacing: 50px;">Refeição</p>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="formRefeicao.php">Servir Refeição</a>
        <a class="dropdown-item" href="listaRefeicaoBd.php">Refeições Servidas</a>
      </div>
    </li>
  </ul>
</nav>
<br>
  </body>
</html>
