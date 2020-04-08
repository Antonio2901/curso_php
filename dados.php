<?php
	
	//Requisição dos arquivos com as funções necessarias ao codigo

	require_once 'Serviços/servicoValidacao.php';
	require_once 'Serviços/inscricao.php';

	//Filtro das entradas

	$nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
	$idade = filter_var($_POST['idade'], FILTER_VALIDATE_INT);
	
	//Condição que avalia o resultado das funções
	
	if(!ValidarEntradas($nome,$idade)){	
		header('Location: index.php?dados=erro');
	}else{
		CategoriaInscricao($nome, $idade);
		header('Location: index.php?dados=sucesso');
	}
?>

