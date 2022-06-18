<?php

declare(strict_types=1);

include 'Aluno.php';
include 'Curso.php';

$a1 = new Aluno();
$a1 -> nome = 'José';
$a1 -> cpf = '021.123.321-10';

$cursoPHP = new Curso();
$cursoPHP -> nome = 'Introdução ao PHP';
$cursoPHP -> cargaHoraria = 88;
$cursoPHP -> descricao = 'Aprender o basico e o intermediário do php';

echo " <h1>Aluno: {$a1->nome}</h1> ";

var_dump($a1) . PHP_EOL;
var_dump($cursoPHP);