<?php

require_once 'ControleRemoto.php';
$c1 = new ControleRemoto();

?>
<html>

<body>
  <pre>
    <?php

    var_dump($c1);
    echo "<br/>";

    $c1->ligar();
    $c1->play();
    $c1->$c1->abrirMenu();

    ?>
    </pre>
</body>

</html>