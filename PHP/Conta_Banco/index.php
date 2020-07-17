<?php

require_once 'ContaBanco.php';

$p1 = new ContaBanco();
$p1->setDono("Miguel Cassimiro");
$p1->abrirConta("CC");
$p1->setNumConta('222222');

$p2 = new ContaBanco();
$p2->setDono("Lopes");
$p2->abrirConta("CP");
$p2->setNumConta('333333');

$p1->depositar(200);
$p2->depositar(500);


echo $p1->getDono() . ": R$" . $p1->getSaldo() . "<br/>";
echo $p2->getDono() . ": R$" . $p2->getSaldo() . "<br/>";

echo "<br/>";
$p1->pagaMensal();
echo "<br/>";
$p2->pagaMensal();

echo $p1->getDono() . ": R$" . $p1->getSaldo() . "<br/>";
echo $p2->getDono() . ": R$" . $p2->getSaldo() . "<br/>";

$p1->sacar($p1->getSaldo());
$p2->sacar($p2->getSaldo());

$p1->fecharConta();
$p2->fecharConta();

$p1->sacar(500);
