<?php

    include 'servicos/servicoInscricao.php';
    include 'servicos/servicoVerificacaoEntrada.php';
    include 'servicos/servicoMensagem.php';
    
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    inscricao($nome, $idade);
    header('Location: index.php');
    