<?php

ini_set('display_erros', 1);

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$c1 = new Cliente('Zezim', 'zezim@gmail.com', '05215648975', '654sdf');

$g1 = new Gestor('Chiquim', 'chiquim@bbbgmail.com', '0154657855', '658165f', 6200, '8h');

var_dump($c1);
echo '<br>'. PHP_EOL;
echo '<br>'. PHP_EOL;
var_dump($g1);