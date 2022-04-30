<?php

	function lista($nomeTabela){
		include("conexao.php");
		
		$sql = "SELECT * from $nomeTabela";		
		
		$res = mysqli_query($con, $sql)
			or die("Erro ao listar:<BR>" . mysqli_error($con));
			
		return $res;
	}
	
	function nomeCampo($id, $nomeTabela, $nomeCampo){
		include('conexao.php');
		
		$sql = "SELECT distinct * FROM $nomeTabela WHERE $nomeCampo = '$id'";
		$res = mysqli_query($con, $sql) or die("Erro ao listar:<br>" . mysqli_error($con));
		
			return mysqli_fetch_array($res);
	}
	
	//lista quais opcoes o prato tem(passa o nome do prato aqui)
	function OpcoesQueOPratoTem($NomePrato){
		include('conexao.php');
		
		$sql = "SELECT opcoes.descricao from cardapio, opcoes, cardapio_opcoes WHERE cardapio.descricao = '$NomePrato' 
		and cardapio.id_cardapio = cardapio_opcoes.id_cardapio and
		cardapio_opcoes.id_opcao = opcoes.id_opcao";
		$res = mysqli_query($con, $sql) or die("Erro ao listarr:<br>" . mysqli_error($con));
		
			return $res;
	}
	
	//consulta quais alunos comeram tal cardapio(a partir do id do cardapio)
	function AlunosQueComeram($id_cardapio){
		include('conexao.php');
		
		$sql = "SELECT distinct nome from alunos, refeicao_aluno WHERE alunos.id_aluno = refeicao_aluno.id_aluno and 
					refeicao_aluno.id_cardapio = $id_cardapio;";
		$res = mysqli_query($con, $sql) or die("Erro ao listarr:<br>" . mysqli_error($con));
		
			return $res;
	}
	

	//selecione descricao, id e data dos pratos que foram servidos nas refeicoes
	function descricao(){
		include('conexao.php');
		
		$sql = "select distinct cardapio.id_cardapio, descricao, data from cardapio, refeicao_aluno where cardapio.id_cardapio = refeicao_aluno.id_cardapio;";
		$res = mysqli_query($con, $sql) or die("Erro ao listarr:<br>" . mysqli_error($con));
		
			return $res;
	}
	
	
?>