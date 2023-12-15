<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Metodos especiais
    function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    function setVolume($volume){
        $this->volume = $volume;
    }
    function getVolume(){
        return $this->volume;
    }

    function setLigado($ligado){
        $this->ligado = $ligado;
    }
    function getLigado(){
        return $this->ligado;
    }

    function setTocando($tocando){
        $this->tocando = $tocando;
    }
    function getTocando(){
        return $this->tocando;
    }



    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<br>Esta ligado?: " . ($this->getLigado() ? "Sim":"Não");
        echo "<br>Esta tocando?: " . ($this->getTocando() ? "Sim":"Não");

        for($i=0; $i<= $this->getVolume(); $i++){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "Fechando menu!";
    }
    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setLigado($this->getVolume() - 5);
        }
    }

    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0 ){
            $this->setVolume(50);
        }        
    }

    public function play(){
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}

?>