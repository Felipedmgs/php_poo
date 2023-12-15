<?php

//colocando como abstrata para não poder ser instanciada,
//pois assim vamos intanciar somente as filhas
abstract class Pessoa{

    private $nome;
    private $idade;
    private $sexo;
 

    public function getNome(){
        return $this->nome;
    }
    public function setNome($var){
        $this->nome = $var;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($var){
        $this->idade = $var;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($var){
        $this->sexo = $var;
    }

    //metodo final:
    public final function fazerAniversario(){
        $this->idade ++;
    }

}

?>