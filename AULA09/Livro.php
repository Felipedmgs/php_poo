<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct($t, $a, $totpag, $l){
        $this->titulo = $t;
        $this->autor = $a;
        $this->totPaginas = $totpag;
        $this->leitor = $l;
        $this->aberto = false;
        $this->pagAtual = 0;


    }
    

    function getTitulo(){
        return $this->titulo;
    }
    function setTitulo($var){
        $this->titulo = $var;
    }

    function getAuto(){
        return $this->autor;
    }
    function setAutor($var){
        $this->autor = $var;
    }
    
    function getTotpaginas(){
        return $this->totPaginas;
    }
    function setTotpaginas($var){
        $this->totPaginas = $var;
    }

    function getPagatual(){
        return $this->pagAtual;
    }
    function setPagatual($var){
        $this->pagAtual = $var;
    }
    
    function getAberto(){
        return $this->aberto;
    }
    function setAberto($var){
        $this->aberto = $var;
    }

    function getLeitor(){
        return $this->leitor;
    }
    function setLeitor($var){
        $this->leitor = $var;
    }



    public function detalhe(){
        echo  "Livro " . $this->getTitulo() . 
        " Escrito por: " . $this->getAuto() . "<br>Páginas " . $this->getPagatual() . 
        "<br> Sendo lido por: " . $this->leitor->getNome();
    }


    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($this->totPaginas > $p){
            $this->pagAtual = $p;
        }else{
            $this->pagAtual = 0;
        }
    }    
    public function avancarPag(){
        $this->pagAtual ++;
    }
    public function voltarPag(){
        $this->pagAtual --;
    }





}




?>