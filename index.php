<?php
    include 'servicos/servicoMensagem.php';  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para inscrição de atletas</title>
</head>
<body>
    <?php
        $msgErro = pegarAvisosErro();
        $msgSucesso = pegarAvisosSucesso();
        
        if(!empty($msgErro)){
            echo "<li>".$msgErro."</li><hr>";
        }elseif(!empty($msgSucesso)){
            echo "<li>".$msgSucesso."</li><hr>";
        }
    ?>
    <h1>Formulario de inscrição para Competição de Natação</h1>
    <form action = "dados.php" method = "POST">
        <p>Nome: <input type = "text" name = "nome" placeholder = "Nome"></p><br>
        <p>Idade: <input type = "text" name = "idade" placeholder = "Idade"></p><br>
        <input type="submit" name = "btn-enviar" value = "enviar">    
    </form>
</body>
</html>