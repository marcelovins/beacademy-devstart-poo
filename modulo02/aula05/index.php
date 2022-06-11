<?php

ini_set('display_erros', 1);

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'Validar.php';

$c1 = new Cliente('Zezim', 'zezim@gmail.com', '05215648975', '654sdf');

$g1 = new Gestor('Chiquim', 'chiquim@bbbgmail.com', '0154657855', '658165f', 6200, '8h');

$gg1 = new GestorGeral('Maria', 'maria@abc.com', '65495175348', '123456', 10500, '8h', 8000);

$cpf = '123456789';

// $validador = new Validar();
// $validador->validarCpf($cpf);
Validar::validarCpf($cpf);
$c1->setCpf($cpf);


var_dump($c1);
echo '<br>';
echo '<br>';
var_dump($g1);
echo '<br>';
echo '<br>';
var_dump($gg1);