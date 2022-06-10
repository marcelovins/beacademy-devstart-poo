<?php

ini_set('display_erros', 1);

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$c1 = new Cliente('Zezim');

$g1 = new Gestor('Chiquim');

var_dump($c1);
echo '<br>'. PHP_EOL;
echo '<br>'. PHP_EOL;
var_dump($g1);