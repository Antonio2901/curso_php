<?php
	session_start();
	$categoria = [];
	$categoria[] = "Infantil";
	$categoria[] = "Adolescente";
	$categoria[] = "Adulto";
	//$nome = "Antonio";
	//$idade  = 21;

	$nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
	$idade = filter_var($_POST['idade'], FILTER_VALIDATE_INT);
	
	if(empty($nome)){
		$_SESSION['mensagem-de-erro'] = "O campo Nome não pode estar vazio";
		header('Location: index.php?dados=erro');
	}else{
		if(strlen($nome) <3 || strlen($nome) > 40){
			$_SESSION['mensagem-de-erro'] =  "O Nome tem que estar entre 3 e 40 caracteres";
			header('Location: index.php?dados=erro');
		}
	}

	if(empty($idade)){
		$_SESSION['mensagem-de-erro'] = "O campo Idade só aceita numeros ou não pode estar vazio";
		header('Location: index.php?dados=erro');
	}else{
		if(strlen($idade) > 3){
			$_SESSION['mensagem-de-erro'] =  "O campo Idade não pode conter mais de 2 caracteres";
			header('Location: index.php?dados=erro');
		}
	}

	if(empty($_SESSION['mensagem-de-erro'] )){
		if($idade >= 6 AND $idade <= 12){
			for($i =0 ; $i <count($categoria); $i++){
				if($categoria[$i] == "Infantil"){
					$_SESSION['mensagem-de-sucesso'] =  "O Competidor ".$nome." foi inscrito na categoria ".$categoria[$i]." com sucesso";
					header('Location:  index.php?dados=sucesso');
				}
			}

		}elseif($idade >= 13 AND $idade <= 18){
			for($i =0 ; $i <count($categoria); $i++){
				if($categoria[$i] == "Adolescente"){
					$_SESSION['mensagem-de-sucesso'] =  "O Competidor ".$nome." foi inscrito na categoria ".$categoria[$i]." com sucesso";
					header('Location:  index.php?dados=sucesso');
				}
			}	
		}elseif($idade > 18){
			for($i =0 ; $i <count($categoria); $i++){
				if($categoria[$i] == "Adulto"){
					$_SESSION['mensagem-de-sucesso'] =  "O Competidor ".$nome." foi inscrito na categoria ".$categoria[$i]." com sucesso";
					header('Location:  index.php?dados=sucesso');
				}
			}
		}
	}
?>

