<?php

class Lutador{

    //atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria;
    private $vitorias, $derrotas, $empate;

    function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);        
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpate($em);
    }


    //metodos de controle:
    function getNome(){
        return $this->nome;
    }
    function setNome($n){
        $this->nome = $n;
    }

    function getNacionalidade(){
        return $this->nacionalidade;

    }
    function setNacionalidade($a){
        $this->nacionalidade = $a;
    }

    function getIdade(){
        return $this->idade;    
    }
    function setIdade($a){
        $this->idade = $a;
    }

    function getAltura(){
        return $this->altura;
    }
    function setAltura($a){
        $this->altura = $a;
    }

    function getPeso(){
        return $this->peso;
    }
    function setPeso($a){
        $this->peso = $a;
        $this->setCategoria();
    }

    function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria(){
        if($this->getPeso() < 52.2){
            $this->categoria = 'Inválido';
        }elseif($this->getPeso() <= 70.3){
            $this->categoria = 'Leve';
        }elseif($this->getPeso() <= 83.9){
            $this->categoria = 'Médio';
        }elseif($this->getPeso() <= 120.2){
            $this->categoria = 'Pesado';
        }else{
            $this->categoria = 'Inválido';
        }
    }

    function getVitorias(){
        return $this->vitorias;
    }
    function setVitorias($a){
        $this->vitorias = $a;
    }

    function getDerrotas(){
        return $this->derrotas;
    }
    function setDerrotas($a){
        $this->derrotas = $a;
    }

    function getEmpate(){
        return $this->empate;
    }
    function setEmpate($a){
        $this->empate = $a;
    }

    //metodos:
    public function apresentar(){
        echo '<br><br><p>----------------------------------------------</p>';
        echo "Lutador: " . $this->getNome();
        echo " Origem: " . $this->getNacionalidade();
        echo $this->getIdade() . " Anos. ";
        echo $this->getAltura() . " m de Altura ";
        echo " Pesando : " . $this->getPeso() . "kg ";
        echo " Ganhou : " . $this->getVitorias();
        echo " Perdeu : " . $this->getDerrotas();
        echo " Empatou : " . $this->getEmpate() . '<br><br>';
    }

    public function Status(){
        echo '<br><br>' . $this->getNome();
        echo " É um peso " . $this->getCategoria();
        echo $this->getVitorias() . " Vitórias ";
        echo $this->getDerrotas() . " Derrotas ";
        echo $this->getEmpate() . " Empates " . '<br><br>';        
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpate($this->getEmpate() + 1);
    }

}




?>