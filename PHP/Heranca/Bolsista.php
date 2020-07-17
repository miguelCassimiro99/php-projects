<?php

require_once 'Aluno.php';

class Bolsista extends Aluno
{
  private $bolsa;

  public function pagarMensalidade()
  {
    echo "Mensalidade paga";
  }

  public function pagandoMensalidade()
  {
    echo "<br/>Mensalidade paga de bolsista. Aluno " . $this->getNome() . "<br/>";
  }

  //métodos especiais
  public function setBolsa($bolsa)
  {
    $this->bolsa = $bolsa;
  }
}
