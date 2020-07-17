<?php

require_once 'Lutador.php';

class Luta
{
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  //método públicos
  public function marcarLuta($l1, $l2)
  {
    if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
      $this->setAprovada(true);
      $this->setDesafiante($l1);
      $this->setDesafiado($l2);
    } elseif ($l1->getCategoria() != $l2->getCategoria() or $l1 === $l2) {

      $this->setAprovada(false);
      $this->setDesafiante(null);
      $this->setDesafiado(null);
    }
  }
  public function lutar()
  {
    if ($this->getAprovada() == true) :
      echo "DESAFIANTE: <br/>";
      $this->desafiante->apresentar();
      echo "<br/>";
      echo "DESAFIADO: <br/>";
      $this->desafiado->apresentar();
      $winner = rand(0, 2);

      switch ($winner) {
        case 0: //empate
          echo "<br/> Double K.O ";
          $this->desafiante->empatarLuta();
          $this->desafiado->empatarLuta();
          break;

        case 1: //desafiante vence
          $this->desafiante->ganharLuta();
          $this->desafiado->perderLuta();
          echo "<br/>" . $this->desafiante->getNome() . " WINS <br/>";

          break;
        case 2: //desafiado vence
          $this->desafiante->perderLuta();
          $this->desafiado->ganharLuta();
          echo "<br/>" . $this->desafiado->getNome() . " WINS <br/>";
          break;
      } elseif ($this->getAprovada() == false) :
      echo "IMPOSSÍVEL REALIZAR LUTA ";
    endif;
  }
  //métodos especiais
  public function setDesafiado($desafiado)
  {
    $this->desafiado = $desafiado;
  }
  public function getDesafiado()
  {
    return $this->desafiado;
  }

  public function setDesafiante($desafiante)
  {
    $this->desafiante = $desafiante;
  }
  public function getDesafiante()
  {
    return $this->desafiante;
  }

  public function setRounds($rounds)
  {
    $this->rounds = $rounds;
  }
  public function getRounds()
  {
    return $this->rounds;
  }

  public function setAprovada($aprovada)
  {
    $this->aprovada = $aprovada;
  }
  public function getAprovada()
  {
    return $this->aprovada;
  }
}
