<?php

ini_set('display_errors', 1);

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor();
$p1 -> nome = 'José';
$p1 -> cpf = '012.345.678-10';
$p1 -> salario = 1000;

 var_dump($p1);