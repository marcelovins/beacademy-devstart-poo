<?php

ini_set('display_erros', 1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas unissex');
$c2 = new Categoria('Roupas de banho', 'Toalhas, toalhas para rosto, etc');
$c3 = new Categoria('Calçados', 'Calçados em geral');

$p1 = new Produto('Tenis', 299, $c3);
// $p1 ->setNome('tênis para corrida');
// $p1 ->setValor(299);

// $p1 ->pegarNome();
// $p1 ->pegarValor();

$p2 = new Produto('Saia Jeans', 150, $c1);
// $p2->setCategoria($c2);  //não irá funcionar por causa do readonly no objeto;
// $p2 ->setNome('saia jeans');
// $p2 ->setValor(150);

var_dump($p1); 
echo "<br>" ;
echo "<br>" ;
var_dump($p2);
echo "<br>";

echo $p1->getNome();  //assim se chama métodos

