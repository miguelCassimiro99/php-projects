<?php

require_once 'Pessoa.php';
require_once 'Livro.php';

?>
<html>

<body>
  <h1>Atividade Leitura</h1>
  <pre>
    <?php

    $p[] = new Pessoa('Miguel', 19, 'Masculino');
    $l[] = new Livro('Apocalipse', 'maiguelman', 450, $p[0]);

    var_dump($l[0]);

    ?>
  </pre>
</body>

</html>