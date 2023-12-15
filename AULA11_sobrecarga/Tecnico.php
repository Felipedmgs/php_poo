<?php

require_once 'Aluno.php';

class Tecnico extends Aluno{

    private $registroProfissional;

    

    public function pratica(){
        echo "Praticando por " . $this->getNome();
    }

    
    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }   
    public function setRegistroProfissional($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;
    }
}


?>