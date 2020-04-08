<?php
	$categoria = [];
	$categoria[] = "Infantil";
	$categoria[] = "Adolescente";
	$categoria[] = "Adulto";
	//$nome = "Antonio";
	//$idade  = 21;

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	if($idade >= 6 AND $idade <= 12){
		for($i =0 ; $i <count($categoria); $i++){
			if($categoria[$i] == "Infantil"){
				echo "O competidor ".$nome." é da categoria ".$categoria[$i]."<br>";
			}
		}

	}elseif($idade >= 13 AND $idade <= 18){
		for($i =0 ; $i <count($categoria); $i++){
			if($categoria[$i] == "Adolescente"){
				echo "O competidor ".$nome." é da categoria ".$categoria[$i]."<br>";
			}
		}	
	}else{
		for($i =0 ; $i <count($categoria); $i++){
			if($categoria[$i] == "Adulto"){
				echo "O competidor ".$nome." é da categoria ".$categoria[$i]."<br>";
			}
		}
	}
?>
<button type="submit" name="btn-voltar">Voltar</button>
