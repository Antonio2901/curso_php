<?php 
	
	session_start();


	function CategoriaInscricao($nome,  $idade){

		$categoria = [];
		$categoria[] = "Infantil";
		$categoria[] = "Adolescente";
		$categoria[] = "Adulto";

		if($idade >= 6 AND $idade <= 12){
			for($i =0 ; $i <count($categoria); $i++){
				if($categoria[$i] == "Infantil"){
					$_SESSION['mensagem-de-sucesso'] =  "O Competidor ".$nome." foi inscrito na categoria ".$categoria[$i]." com sucesso";
				}
			}

		}elseif($idade >= 13 AND $idade <= 18){
			for($i =0 ; $i <count($categoria); $i++){
				if($categoria[$i] == "Adolescente"){
					$_SESSION['mensagem-de-sucesso'] =  "O Competidor ".$nome." foi inscrito na categoria ".$categoria[$i]." com sucesso";
				}
			}	
		}elseif($idade > 18){
			for($i =0 ; $i <count($categoria); $i++){
				if($categoria[$i] == "Adulto"){
					$_SESSION['mensagem-de-sucesso'] =  "O Competidor ".$nome." foi inscrito na categoria ".$categoria[$i]." com sucesso";
				}
			}
		}
	}

 ?>