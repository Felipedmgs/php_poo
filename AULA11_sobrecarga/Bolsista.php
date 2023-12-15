<?php

require_once 'Aluno.php';

class Bolsista extends ALuno{

    private $bolsa;

    function getBolsa(){
        return $this->bolsa;
    }
    function setBolsa($var){
        $this->bolsa = $var;
    }
    
    public function renovarBolsa(){
        echo "Bolsa renovada";
    }

    //sobrepondo metodo
    //para não deixar sobrepor, só colocar a palavra final no metodo 
    //na classe aluno.
    public function pagarMensalidade(){
        echo 'pagando mensalidade de bolsista ' . $this->getNome();
    }

}

?>