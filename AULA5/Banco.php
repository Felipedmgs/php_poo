<?php
class Banco{

    public      $numConta;
    protected   $tipo;
    private     $dono;
    private     $saldo;
    private     $status;


    //abrir conta
    public function Banco($nc, $t, $nm){
        $this->numConta = $nc;
        $this->setTipo($t);
        $this->dono = $nm;
        $this->setStatus(1);

        if($t == 'CC'){
            $this->setSaldo('50');

        }else{
            $this->setSaldo('150');
        }
    }

    public function fecharConta(){
       if($this->getSaldo() == 0){
            $this->setStatus(0);
            echo "<th>A conta corrente do " . $this->getDono() . " De numero: " . $this->getNumconta() . " foi fechada.<th>";
       }else{
            echo "</br>Salde de: R$" . $this->getSaldo() . " Zere o saldo para fechar a conta.";
       }

    }

       
    public function depositar($v){
        $this->setSaldo($this->getSaldo() + $v);
        echo '</br>Deposito realizado com sucesso: R$' .  $v;
    }

    public function sacar($v){
        $result = $this->getSaldo() - $v;

        if( $result >= 0){
           $this->setSaldo($result);
            echo '</br>Saque realizado';
        }else{
            echo '</br>Saldo insuficiente';
        }
    }

    public function pagarMensal(){
        
        if($this->getTipo() == 'CC'){
            $this->sacar(12);
            echo '</br>Mensalidade de R$12 para, saldo de: ' . $this->getSaldo();
        }else{
            $this->sacar(20);
            echo '</br>Mensalidade de R$20 para, saldo de: ' . $this->getSaldo();

        }
    }


    //gets e sets
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }

    public function setStatus($s){
        $this->status = $s;
    }
    public function getStatus(){
        return $this->status;
    }

    public function setTipo($s){
        $this->tipo = $s;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function setDono($s){
        $this->dono = $s;
    }
    public function getDono(){
        return $this->dono;
    }

    public function setNumconta($s){
        $this->numConta = $s;
    }
    public function getNumconta(){
        return $this->numConta;
    }



}

?>