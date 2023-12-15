<?php

require_once 'Pessoa.php';

//se colocar a palavra finalna assinatura da classe,
//não sera possivel criar classe filha.
//final class Aluno extends Pessoa{

class Aluno extends Pessoa{

    private $matricula;
    private $curso;

    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($var){
        $this->matricula = $var;
    }

    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($var){
        $this->curso = $var;
    }

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno ". $this->getNome() ."</p>";
    }


}

?>