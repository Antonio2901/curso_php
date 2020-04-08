<?php
	$erros = [];
	$categoria = [];
	$categoria[] = "Infantil";
	$categoria[] = "Adolescente";
	$categoria[] = "Adulto";
	//$nome = "Antonio";
	//$idade  = 21;

	$nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
	$idade = filter_var($_POST['idade'], FILTER_VALIDATE_INT);
	
	if(empty($nome)){
		$erros[] = "O campo Nome não pode estar vazio";
	}else{
		if(strlen($nome) <3 || strlen($nome) > 40){
			$erros[] =  "O Nome tem que estar entre 3 e 40 caracteres";
		}
	}

	if(empty($idade)){
		$erros[] = "O campo Idade só aceita numeros ou não pode estar vazio";
	}else{
		if(strlen($idade) <2){
			$erros[] =  "O campo Idade não pode conter mais de 2 caracteres";
		}
	}

	if(empty($erros)){
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
	}else{
		foreach ($erros as $e) {
			echo $e."<br>";
		}
	}
	?>
<button type="submit" name="btn-voltar">Voltar</button>
