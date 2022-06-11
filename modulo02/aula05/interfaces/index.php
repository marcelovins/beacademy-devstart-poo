<?php

ini_set('display_errors', 1);

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

// $br = new ValidarBR();         //ou seja, o método, através da inteface, pode ser usado para as duas classes
// $br->validarDocumento('123456789');


$us = new ValidarUS();
$us->validarDocumento('123456');
