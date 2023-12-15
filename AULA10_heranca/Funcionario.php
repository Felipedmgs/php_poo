<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa{

    private $setor;
    private $trabalhando;

    function getSetor(){
        return $this->setor;
    }
    function setSetor($var){
        $this->setor = $var;
    }

    function getTrabalhando(){
        return $this->trabalhando;
    }
    function setTrabalhando($var){
        $this->trabalhando = $var;
    }

    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }

}


?>