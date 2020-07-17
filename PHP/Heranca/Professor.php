<?php
require_once 'Pessoa.php';

class Professor extends Pessoa
{

  private $especialidade;
  private $salario;

  //métodos
  public function aumentaSal($aumento)
  {
    $this->salario += $aumento;
  }
  //

  //métodos públicos
  public function setEspecial($especialidade)
  {
    $this->especialidade = $especialidade;
  }
  public function getEspecialidade()
  {
    return $this->especialidade;
  }
  public function setSal($salario)
  {
    $this->salario = $salario;
  }
  public function getSal()
  {
    return $this->salario;
  }
}
