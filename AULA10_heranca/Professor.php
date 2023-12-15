<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{

    private $especialidade;
    private $salario;

    function getEspecialidade(){
        return $this->especialidade;
    }
    function setEspecialidade($var){
        $this->especialidade = $var;
    }

    function getSalario(){
        return $this->salario;
    }
    function setSalario($var){
        $this->salario = $var;
    }

    public function receberAumento($aum){
        $this->salario += $aum;
    }

}

?>