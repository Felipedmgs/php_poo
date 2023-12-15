<?php

class Caneta{

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    function rabiscar(){
        if($this->tampada == true){
            echo 'Não foi feito rabisca, caneta tampada.';
        }else{
            echo "Rabiscando com a caneta";
        }
    }   
    
    public function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;        
    }



}


?>
