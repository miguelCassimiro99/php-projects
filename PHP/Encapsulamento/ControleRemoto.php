<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador
{

  private $volume;
  private $ligado;
  private $tocando;

  public function __construct()
  {
    $this->setVolume(50);
    $this->setLigado(false);
    $this->setTocando(false);
  }

  private function setVolume($volume)
  {
    $this->volume = $volume;
  }
  private function getVolume()
  {
    return $this->volume;
  }

  private function setLigado($ligado)
  {
    $this->ligado = $ligado;
  }
  private function getLigado()
  {
    return $this->ligado;
  }
  private function setTocando($t)
  {
    $this->tocando = $t;
  }
  private function getTocando()
  {
    return $this->tocando;
  }

  public function ligar()
  {
    $this->setLigado(true);
  }
  public function desligar()
  {
    $this->setLigado(false);
  }
  public function abrirMenu()
  {
    echo "<br/>Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
    echo "<br/>Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO") . "<br/>";
    echo "<br/>Volume: " . $this->getVolume();
    for ($i = 0; $i <= $this->getVolume(); $i += 10) {
      echo " | ";
    }
    echo "<br/>";
  }
  public function fecharMenu()
  {
    echo "Fechando menu...";
  }
  public function maisVolume()
  {
    if ($this->getLigado()) {
      $this->setVolume($this->getVolume() + 5);
    } elseif ($this->getLigado() == false) {
      echo "<br/>DESLIGADO<br/>";
    }
  }
  public function menosVolume()
  {
    if ($this->getLigado()) {
      if ($this->getVolume() > 0) :
        $this->setVolume($this->getVolume() - 5);
      elseif ($this->getVolume() <= 0) :
        $this->setVolume(0);
        echo "<br/>0<br/>";
      endif;
    } elseif ($this->getLigado() == false) {
      echo "<br/>DESLIGADO<br/>";
    }
  }
  public function mutar()
  {
    if ($this->getLigado() || $this->getVolume() > 0) :
      $this->setVolume(0);
    endif;
  }
  public function desmutar()
  {
    if ($this->getLigado() || $this->getVolume() == 0) :
      $this->setVolume(50);
    endif;
  }
  public function play()
  {
    if ($this->getLigado() || $this->getTocando() == false) :
      $this->setTocando(true);
      echo "<br/>TOCANDO <br/>";
    endif;
  }
  public function pause()
  {
    if ($this->getLigado() || $this->getTocando() == true) :
      $this->setTocando(false);
    endif;
  }
}
