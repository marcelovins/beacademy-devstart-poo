<?php

// include 'classes/Categoria.php';
// include 'classes/Cliente.php';
// include 'classes/Gestor.php';
// include 'classes/Produto.php';
// include 'classes/Usuario.php';
// include 'classes/Config/Usuario.php';
include 'vendor/autoload.php';

use Classes\Config\Usuario as User;

use Classes\Categoria;

$s1 = new Classes\Usuario();


// $s2 = new Classes/Config/Usuario();

$s2 = new User();

$s3 = new Categoria();

// var_dump($s1);
// var_dump($s2);
var_dump($s3);

echo 'funcionou!';
