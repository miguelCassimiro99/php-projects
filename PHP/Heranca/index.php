<html>

<body>
  <pre>
  <?php

  require_once 'Pessoa.php';
  require_once 'Aluno.php';
  require_once 'Professor.php';
  require_once 'Bolsista.php';

  //programa principal
  $a[0] = new Aluno;
  $a[0]->setNome("Miguel_Aluno");

  var_dump($a[0]);
  $a[0]->pagandoMensalidade();
  echo "<hr/>";

  $b[0] = new Bolsista;
  $b[0]->setNome("Miguel_Bolsista ");
  $b[0]->setBolsa(18.0);
  var_dump($b[0]);
  $b[0]->pagandoMensalidade();

  ?>
  </pre>
</body>

</html>