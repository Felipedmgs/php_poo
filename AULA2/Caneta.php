<?php

class Caneta{

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if($this->tampada == true){
            echo 'Não foi feito rabisca, caneta tampada.';
        }else{
            echo "Rabiscando com a caneta";
        }
    }   
    
    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;        
    }



}


?>
