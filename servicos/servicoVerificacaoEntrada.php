<?php
    //Função para verificar as entradas

    function verificarEntradas($nome, $idade){
        
        //verificar entrada nome
        if(empty($nome)){
            $mensagem = "O campo Nome não pode estar vazio";
            setarAvisosErro($mensagem);
            return true;
        }elseif(strlen($nome) < 3 or strlen($nome) > 40){
            $mensagem = "O Campo nome tem que ter entre 3 e 40 caracteres";
            setarAvisosErro($mensagem);
            return true;
        }
        
        //verificar entrada idade
        if(empty($idade)){
            $mensagem = "O campo Idade não pode estar vazio";
            setarAvisosErro($mensagem);
            setarAvisosErro($mensagem);
            return true;
        }elseif(strlen($idade) > 3){
            $mensagem = "O Campo idade só pode conter até 3 caracteres";
            setarAvisosErro($mensagem);
            return true;
        }
        return false;
    }