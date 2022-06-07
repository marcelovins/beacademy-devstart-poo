<?php

ini_set('display_erros', 1);

include 'Produto.php';

$p1 = new Produto;
$p1 ->setNome('tênis para corrida');
$p1 ->setValor(299);
// $p1 ->pegarNome();
// $p1 ->pegarValor();

var_dump($p1);

echo '<br>';

echo $p1->getNome();  //assim se chama métodos

