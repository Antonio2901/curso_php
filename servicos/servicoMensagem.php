<?php
    //Mensagem para informar problemas e acertos
    
    session_start();

    //Mensagens de erro 
    function setarAvisosErro($mensagem){
        $_SESSION['aviso-erro'] = $mensagem;
    }

    function pegarAvisosErro(){
        return $_SESSION['aviso-erro'];
    }

    function apagarAvisosErro(){
        unset($_SESSION['aviso-erro']);
        
    }

    //Mensagens de sucesso
    function setarAvisosSucesso($mensagem){
        $_SESSION['aviso-sucesso'] = $mensagem;
    }

    function pegarAvisosSucesso(){
        return $_SESSION['aviso-sucesso'];
    }

    function apagarAvisosSucesso(){
        unset($_SESSION['aviso-sucesso']);
        
    }

    //Teste das funções de mensagem
    /*setarAvisosErro("aloo");
    apagarAvisosErro();
    echo pegarAvisosErro();