<?php

class Caneta{

  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;
  
  public function __construct($m, $c, $p){

    $this->setModelo($m);
    $this->cor = $c;
    $this->setPonta($p);
    
  }

  public function setModelo($m){
    $this->modelo = $m;
  }
  public function getModelo(){
    return $this->modelo;
  }

  public function setPonta($p){
    $this->ponta = $p;
  }
  public function getPonta(){
    return $this->ponta;
  }

  public function Rabiscar(){
    if ($this->tampada == true):
      echo "Erro! Não foi possível rabiscar";
    else:
      echo "Rabiscando";
    endif;
  }
  public function Tampar(){
    $this->tampada = true;

  }
  public function Destampar(){
    $this->tampada = false;

  }
}