<?php 
	session_start();
	
	function ValidarEntradas($nome,$idade){

		if(empty($nome)){
			$_SESSION['mensagem-de-erro'] = "O campo Nome não pode estar vazio";
			return false;
		}elseif(strlen($nome) <3 || strlen($nome) > 40){
			$_SESSION['mensagem-de-erro'] =  "O Nome tem que estar entre 3 e 40 caracteres";
			return false;
		}
		if(empty($idade)){
			$_SESSION['mensagem-de-erro'] = "O campo Idade só aceita numeros ou não pode estar vazio";
			return false;
		}elseif(strlen($idade) > 3){
			$_SESSION['mensagem-de-erro'] =  "O campo Idade não pode conter mais de 2 caracteres";
			return false;
		}

		return true;
	}

 ?>