<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    
    public function __construct(){
        $this->setStatus(false);
        $this->setSaldo(0);
        echo "Conta criada com sucesso</br>";
    }
    
    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);   
        }elseif($t == "CP"){
            $this->setSaldo(150);
        }   
    }
    
    
    
    public function fecharConta(){
        if($this->getSaldo() >= 0){
            echo "Conta com dinheiro ainda!</br>";
        }elseif($this->getSaldo() < 0){
            echo "Você está devendo dinheiro!</br>";
        }
        $this->setStatus(false);
    }
    
    
    public function depositar($v){
        if($this->getStatus() == true ){
            $this->setSaldo(getSaldo() + $v);
        }
        echo "Impossivel Depositar,/br>";
        
    }
    
    
    
    public function sacar($v){
        if($this->getStatus() == true) {
            if($this->getSaldo() > $v){
               $this->setSaldo(getSaldo() - $v);
            }else{
                 echo "Saldo insuficiente</br>";
            }
               
        }else{
                echo "Impossivel Sacar!</br>";
        }
        
    }
    
    
    public function pagarMensal(){
      
      if($this->getTipo() == "CC"){
          $v = 12;
      }elseif($this->getTipo() == "CP"){
          $v = 20;
      }  
       
      if($this->getStatus() == true){
          if($this->getSaldo() > $v){
              $this->setSaldo($this->getSaldo() - $v);
          }else{
              echo "Saldo insuficiente</br>";
          }
      }else{
          echo "Impossivel pagar</br>";
      }
      
    }
    
    
    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono = $dono;
    }
    
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    
    
    
    
}

