<?php

require_once 'Pessoa.php';

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

    public function cancelarMatricula(){
        echo "Matricula cancelada";
    }


}

?>