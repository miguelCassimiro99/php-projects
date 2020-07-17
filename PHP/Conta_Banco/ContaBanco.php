<?php

class ContaBanco
{
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  public function abrirConta($t)
  {
    $this->setTipo($t);
    $this->setStatus(true);

    if ($t == 'CC') :
      $this->setSaldo(50);
    elseif ($t == 'CP') :
      $this->setSaldo(100);
    endif;
  }
  public function fecharConta()
  {
    if ($this->getSaldo() > 0) :

      echo "<hr>";
      echo "<br/>Impossível Fechar Conta: Ainda há dinheiro<br/>";
      echo "<hr>";

    elseif ($this->getSaldo() < 0) :
      echo "<br/>Impossível Fechar Conta: Saldo Negativo<br/>";
    elseif ($this->getSaldo() == 0) :
      $this->setStatus(false);
      echo "<hr>";
      echo "<br/>Conta Fechada<br/>";
      echo "<hr>";
    endif;
  }

  public function depositar($v)
  {
    if ($this->getStatus()) :
      $this->setSaldo($this->getSaldo() + $v);

    elseif ($this->getStatus() == false) :
      echo "Impossível depositar: Conta Fechada";
    endif;
  }
  public function sacar($v)
  {
    if ($this->getStatus()) {

      if ($this->getSaldo() >= $v) :
        $this->setSaldo($this->getSaldo() - $v);
        echo $this->getDono() . " sacou R$ " . $v . "<br/>";

      elseif ($this->getSaldo() < $v) :
        echo "<br/>Impossível realizar saque <br/>";
        echo "Saldo atual: " . $this->getSaldo();
      endif;
    } else if ($this->getStatus() == false) {
      echo "Impossível Sacar: Conta Fechada";
    }
  }
  public function pagaMensal()
  {
    if ($this->getTipo() == "CC") :
      $v = 12.00;
    elseif ($this->getTipo() == "CP") :
      $v = 20.00;
    endif;
    if ($this->getStatus()) {
      if ($this->getSaldo() > $v) :
        $this->setSaldo($this->getSaldo() - $v);
        echo $this->getDono() . ": Pagamento Realizado: 'Taxa mensal'<br/>";

      elseif ($this->getSaldo() < $v) :
        echo "Impossível realizar pagament: Saldo insuficiente <br/>";
      endif;
    } elseif ($this->getStatus() == false) {
      echo "Impossível realizar pagamento: Conta Fechada";
    }
  }

  //métodos especiais

  public function __construct()
  {
    $this->setSaldo(0);
    $this->setStatus(false);
  }
  public function setNumConta($nc)
  {
    $this->numConta = $nc;
  }

  public function getNumConta()
  {
    return $this->numConta;
  }

  public function setTipo($t)
  {
    $this->tipo = $t;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  public function setSaldo($s)
  {
    $this->saldo = $s;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  public function setDono($d)
  {
    $this->dono = $d;
  }

  public function getDono()
  {
    return $this->dono;
  }

  public function setStatus($st)
  {
    $this->status = $st;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
