<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa
{
  private $matricula;
  private $curso;

  //métodos publicos


  public function pagandoMensalidade()
  {
    echo "<br/>Mensalidade paga. Aluno " . $this->getNome() . "<br/>";
  }
  //

  //métodos especiais

  public function setMatricula($matricula)
  {
    $this->matricula = $matricula;
  }
  public function getMatricula()
  {
    return $this->matricula;
  }
  public function setCurto($curso)
  {
    $this->curso = $curso;
  }
  public function getCurso()
  {
    return $this->curso;
  }
}
