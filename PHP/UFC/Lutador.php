<?php

class Lutador
{

  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

  public function __construct($nome, $na, $idade, $alt, $peso, $vit, $der, $emp)
  {
    $this->nome = $nome;
    $this->nacionalidade = $na;
    $this->idade = $idade;
    $this->altura = $alt;
    $this->setPeso($peso);
    $this->vitorias = $vit;
    $this->derrotas = $der;
    $this->empates = $emp;
  }


  //métodos especiais
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getNome()
  {
    return $this->nome;
  }
  public function setNacionalidade($naci)
  {
    $this->nacionalidade = $naci;
  }
  public function getNacionalidade()
  {
    return $this->nacionalidade;
  }
  public function setIdade($idade)
  {
    $this->idade = $idade;
  }
  public function getIdade()
  {
    return $this->idade;
  }
  public function setAltura($altura)
  {
    $this->altura = $altura;
  }
  public function getAltura()
  {
    return $this->altura;
  }
  public function setPeso($peso)
  {
    $this->peso = $peso;
    $this->setCategoria();
  }
  public function getPeso()
  {
    return $this->peso;
  }
  private function setCategoria()
  {
    if ($this->getPeso() < 52.2) :
      $this->categoria = "Inválido";
    elseif ($this->peso <= 70.3) :
      $this->categoria = 'Leve';
    elseif ($this->peso <= 83.9) :
      $this->categoria = "Médio";
    elseif ($this->peso <= 120.2) :
      $this->categoria = "Pesado";
    else :
      $this->categoria = "Inválido";
    endif;
  }
  public function getCategoria()
  {
    return $this->categoria;
  }
  public function setVitorias($vitorias)
  {
    $this->vitorias = $vitorias;
  }
  public function getVitorias()
  {
    return $this->vitorias;
  }
  public function setDerrotas($derrotas)
  {
    $this->derrotas = $derrotas;
  }
  public function getDerrotas()
  {
    return $this->derrotas;
  }
  public function setEmpates($emp)
  {
    $this->empates = $emp;
  }
  public function getEmpates()
  {
    return $this->empates;
  }


  //métodos
  public function apresentar()
  {
    echo "FICHA TÉCNICA <br/>";
    echo "NOME: " . $this->getNome()
      . " NACIONALIDADE: " . $this->getNacionalidade() . "<br/>";
    echo "IDADE: " . $this->getIdade() . "   ALTURA:  " . $this->getAltura() . "<br/>";
    echo "VITÓRIAS: " . $this->getVitorias() . "    DERROTAS: " . $this->getDerrotas() .
      "   EMPATES: " . $this->getEmpates() . "<br/>";
  }
  public function status()
  {
    echo "<p>---------------------------------</p>";
    echo $this->getNome() . "   CATEGORIA: " . $this->getCategoria() . " <br/>";
    echo "VITÓRIAS: " . $this->getVitorias() . "    DERROTAS: " . $this->getDerrotas() .
      "   EMPATES: " . $this->getEmpates() . "<br/>";
  }
  public function ganharLuta()
  {
    $this->setVitorias($this->getVitorias() + 1);
  }
  public function perderLuta()
  {
    $this->setDerrotas($this->getDerrotas() + 1);
  }
  public function empatarLuta()
  {
    $this->setEmpates($this->getEmpates() + 1);
  }
}
