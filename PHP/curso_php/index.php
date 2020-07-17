<?php

require_once 'Caneta.php';

$c1 = new Caneta('Bic', 'preto', 0.8);

echo "<hr>";
echo "Caneta: <br/>";
echo "Modelo: ".$c1->getModelo()."<br/>";
echo "Cor: ".$c1->cor."<br/>";
echo "Ponta: ".$c1->getPonta()."<br/>";
echo "<hr>";