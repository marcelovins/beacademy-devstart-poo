<?php

ini_set('display_erros', 1);

include 'Produto.php';

$p1 = new Produto('Tenis', 299);
// $p1 ->setNome('tênis para corrida');
// $p1 ->setValor(299);

// $p1 ->pegarNome();
// $p1 ->pegarValor();

$p2 = new Produto('Saia Jeans', 150);
// $p2 ->setNome('saia jeans');
// $p2 ->setValor(150);

var_dump($p1); 
echo "<br>" ;
var_dump($p2);
echo "<br>";

echo $p1->getNome();  //assim se chama métodos

