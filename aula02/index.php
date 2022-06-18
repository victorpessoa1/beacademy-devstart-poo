<?php

ini_set('display_errors', 1);

include 'Produto.php';

$p2 = new Produto();

echo $p2 -> teste('café<br>');

$p1 = new Produto();
$p1 -> setNome('Tenis para corrida');
$p1 -> setValor(299);

$p2 = new Produto();
$p2 -> setNome('Saia Jeans');
$p2 -> setValor(50);

// $p2 = new Produto();
// $p2 -> nome = 'Calça jeans';
// $p2 -> valor = -100;

 var_dump($p1);
// var_dump($p2);