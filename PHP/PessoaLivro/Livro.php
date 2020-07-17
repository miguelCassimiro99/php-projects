<?php

require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao
{
  private $titulo;
  private $autor;
  private $totalPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;

  public function __construct($titulo, $autor, $totalPaginas, $leitor)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->aberto = false;
    $this->pagAtual = 0;
    $this->totalPaginas = $totalPaginas;
    $this->leitor = $leitor;
  }

  public function abrir()
  {
    $this->aberto = true;
  }
  public function fechar()
  {
    $this->aberto = false;
  }
  public function folhear($pagina)
  {
    if ($pagina > $this->totalPaginas) :
      $this->pagAtual = 0;
    else :
      $this->pagAtual = $pagina;
    endif;
  }
  public function avancaPagina()
  {
    if ($this->getPagAtual() !== $this->getTotalPaginas) :
      $this->pagAtual++;
    else :
      echo "<br/>Última página";
    endif;
  }
  public function voltaPagina()
  {
    if ($this->pagAtual > 0) :
      $this->pagAtual--;
    else :
      echo "<br/>Primeira Página</br>";
    endif;
  }
  public function detalhe()
  {
    echo "Título: " . $this->getTitulo() . "<br/>";
    echo "Autor: " . $this->getAutor() . "<br/>";
    echo "Páginas: " . $this->getTotalPaginas() . "<br/>";
    echo "Leitor: " . $this->getLeitor() . "<br/>";
  }

  //métodos especiais
  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }
  public function getTitulo()
  {
    return $this->titulo;
  }
  public function setAutor($autor)
  {
    $this->autor = $autor;
  }
  public function getAutor()
  {
    return $this->autor;
  }
  public function setTotalPaginas($totalPaginas)
  {
    $this->totalPaginas = $totalPaginas;
  }
  public function getTotalPaginas()
  {
    return $this->totalPaginas;
  }
  public function setPagAtual($pagAtual)
  {
    $this->pagAtual = $pagAtual;
  }
  public function getPagAtual()
  {
    return $this->pagAtual;
  }
  public function setAberto($aberto)
  {
    $this->aberto = $aberto;
  }
  public function getAberto()
  {
    return $this->aberto;
  }
  public function setLeitor($leitor)
  {
    $this->leitor = $leitor;
  }
  public function getLeitor()
  {
    return $this->leitor;
  }
}
