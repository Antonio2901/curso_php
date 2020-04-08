<?php
	
	require_once 'Serviços/servicoValidacao.php';
	require_once 'Serviços/inscricao.php';

	//$nome = "Antonio";
	//$idade  = 21;

	$nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
	$idade = filter_var($_POST['idade'], FILTER_VALIDATE_INT);
	
	if(!ValidarEntradas($nome,$idade)){	
		header('Location: index.php?dados=erro');
	}else{
		CategoriaInscricao($nome, $idade);
		header('Location: index.php?dados=sucesso');
	}
?>

