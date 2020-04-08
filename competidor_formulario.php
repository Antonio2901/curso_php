<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Formulário de inscrição</title>
		<meta name="author" content="">
		<meta  name="description" content="">
		<meta  name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
<?php 
	$erro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : "";
	$sucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : "";
	if(!empty($erro)){
		echo "<li>".$erro."</li><hr>";
		session_unset();
	}elseif(!empty($sucesso)){
		echo "<li>".$sucesso."</li><hr>";
		session_unset();
	}
?>
		<h1>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</h1>
		<form action="dados.php" method="post">
			<input type="text" name="nome" placeholder="Seu Nome"><br>
			<input type="text" name="idade" placeholder="Sua Idade"><br>
			<button type="submit" name="btn-enviar">Enviar</button>
		</form>
	</body>
</html>