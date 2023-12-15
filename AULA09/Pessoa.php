<?php
require_once 'Livro.php';

class Pessoa{

    
    private $nome;
    private $idade;
    private $sexo;

    function __construct($n, $i, $s){
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }


    function setNome($var){
        $this->nome = $var;
    }
    function getNome(){
        return $this->nome;
    }

    function setIdade($var){
        $this->idade = $var;
    }
    function getIdade(){
        return $this->idade;
    }

    function setSexo($var){
        $this->sexo = $var;
    }
    function getSexo(){
        return $this->sexo;
    }

    public function fazerAniversario(){
        $this->idade ++;

    }

}



?>