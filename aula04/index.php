<?php

ini_set('display_errors', 1);

include 'Usuario.php';
include 'Cliente.php';
include 'ClienteVip.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiquim@email.com', 213123123);
$c1->setNome('Chiquinho');
$c1->setDataCadastro('01/01/1997');

$g1 = new Gestor('zezim@email.com', 453456454, 6000);
$g1->setNome('Zezim');
$g1->setSalario(6000);

$gg1 = new GestorGeral('Maria', '1q3w42', 5000);

// $us = new Usuario('hacker@email.com', '111111111');

// $cv = new ClienteVip('clientevip@email.com', '122212');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
// var_dump($us);
// var_dump($cv);