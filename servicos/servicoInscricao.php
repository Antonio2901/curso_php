<?php

    function inscricao($nome, $idade){

        $categoria = [];
        $categoria[] = "Infatil";
        $categoria[] = "Adolescente";
        $categoria[] = "Adulto";
    
        if(!verificarEntradas($nome,$idade)){
            apagarAvisosErro();
            for($i = 0; $i < count($categoria); $i++){
                if($categoria[$i] == "Infantil"){
                    if($idade > 6 and $idade <= 12){
                        $mensagem = "O atleta ".$nome." ira competir na categoria ".$categoria[$i];
                        setarAvisosSucesso($mensagem);
                    }
                }elseif($categoria[$i] == "Adolescente"){
                    if($idade > 12 and $idade <=18){
                        $mensagem = "O atleta ".$nome." ira competir na categoria ".$categoria[$i];
                        setarAvisosSucesso($mensagem);
                    }
                }elseif($categoria[$i] == "Adulto"){
                    if($idade >18){
                        $mensagem = "O atleta ".$nome." ira competir na categoria ".$categoria[$i];
                        setarAvisosSucesso($mensagem);
                    }
                }
            }
        }else{
            apagarAvisosSucesso();
            return pegarAvisosErro();
        }
    }