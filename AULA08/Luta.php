<?php
  require_once 'Lutador.php';
  class Luta{

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;

    function setDesafiado($var){
        $this->desafiado = $var;
    }
    function getDesafiado(){
      return $this->desafiado;      
    }

    function setDesafiante($var){
      $this->desafiante = $var;
    }
    function getDesafiante(){
      return $this->desafiante;      
    }

    function setRounds($var){
      $this->rounds = $var;
    }
    function getRounds(){
      return $this->rounds;      
    }

    function setAprovado($var){
      $this->aprovado = $var;
    }
    function getAprovado(){
      return $this->aprovado;      
    }

    public function marcarLuta($l1, $l2){
      if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
        $this->aprovado = true;
        $this->desafiado = $l1;
        $this->desafiante = $l2;
      }else{
        $this->aprovado = false;
        $this->desafiado = null;
        $this->desafiante = null;
      }
    }

    public function lutar(){
      if($this->aprovado){
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();

        $vencedor = rand(0,2);
        switch($vencedor){
          case 0: //empate
            echo 'empatou!!!';
            $this->desafiado->empatarLuta();
            $this->desafiante->empatarLuta();

            break;
          case 1: //desafiado vence
            echo 'desafiado '.$this->desafiado->getNome().' vence';
            $this->desafiado->ganharLuta();
            $this->desafiante->perderLuta();

            break;
          case 2: //desafiante vence
            echo 'desafiante ' . $this->desafiante->getNome() . ' vence';
            $this->desafiado->perderLuta();
            $this->desafiante->ganharLuta();

            break;
        }

      }else{
          echo 'A luta não pode ocorrer';

      }

    }
  
  }

?>