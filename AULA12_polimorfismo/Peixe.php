<?php
require_once 'Animal.php';

class Peixe extends Animal{

    private $corEscama;
    
    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }

    public function locomover(){
        echo "Nadando";
    }
    public function alimentar(){
        echo "Comendo substancias";
    }
    public function emitirSom(){
        echo "peixe não faz som";
    }
    public function soltarBolha(){
        echo 'Soltar uma bolha';
    }
}



?>