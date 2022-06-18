<?php

ini_set('display_errors', 1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas unissex');
$c2 = new Categoria('Roupas de banho', 'Toalhas, Toalhas para Banho, etc');
$c3 = new Categoria('Calçados', 'Calçados em Geral');


$p1 = new Produto('Tenis', 299, $c3);
$p1->setDescricao('Tênis para corrida');
// $p1 -> setNome('Tenis para corrida');
// $p1 -> setValor(299);

$p2 = new Produto('Saia Jeans', 100, $c1);
// $p2->setCategoria($c3); categoria é readOnly, não vai funcionar
// $p2 -> setNome('Saia Jeans');
// $p2 -> setValor(50);

$p3 = new Produto('Calça Branca', 199, $c1);
// $p3->setNome('Calça branca');


var_dump($p1);
var_dump($p2);
var_dump($p3);