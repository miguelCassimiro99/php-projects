<?php

require_once "Lutador.php";
require_once "Luta.php";

$l = array();
$l[0] = new Lutador('Ken Masters', 'EUA', 30, 1.84, 88.79, 49, 5, 15);
$l[1] = new Lutador('Ryu', 'Japan', 30, 1.82, 87.50, 46, 3, 15);
$l[2] = new Lutador('Chun Li', 'China', 27, 1.87, 77.50, 30, 2, 3);
$l[3] = new Lutador('Fei Long', 'China', 34, 1.72, 78.55, 40, 2, 2);
$l[4] = new Lutador('Zangief', 'USSR', 47, 1.97, 97.90, 35, 1, 1);
$l[5] = new Lutador('Guile', 'EUA', 37, 1.80, 90.0, 44, 5, 6);

?>
<html>

<body>
  <pre>
  <?php

  $c01 = new Luta();
  $c01->marcarLuta($l[0], $l[0]);
  echo "<hr/>";
  $c01->lutar();
  echo "<hr/>";

  //$l[0]->status();
  //$l[0]->status();

  ?>
  </pre>
</body>

</html>