<?php

ini_set('display_erros', 1);
//Exemplo Funilaria e Lanternagem

include 'Cliente.php';
include 'Peca.php';
include 'Servico.php';

$cliente1 = new Cliente;
$cliente1 ->nome = 'José Santos';
$cliente1 ->cpf = '55522233315';
$cliente1 ->cep = '38400000';

$peca1 = new Peca;
$peca1 ->nome = 'porta esquerda';
$peca1 ->descricao = 'porta completa com encaixe';
$peca1 ->preco = 250.55;

$servico1 = new Servico;
$servico1 ->nome = 'funilaria';
$servico1 ->descricao = 'retirar porta amassada, soldar encaixe e instalar nova porta';
$servico1 ->duracao = 2;



echo "<h1>O cliente: {$cliente1->nome} solicitou a compra da seguinte peça: {$peca1->nome}.</h1>".PHP_EOL;
echo "<h1>Descrição da peça: {$peca1->descricao}<br> Descrição Serviço Solicitado: {$servico1->descricao}.</h1>";