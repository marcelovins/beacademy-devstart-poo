<?php

include 'Professor.php';
include 'Aluno.php';
include 'Curso.php';


$a1 = new Aluno();
$a1 ->nome = 'Alessandro';
$a1 ->cpf = '05612345678';

$c1 = new Curso();
$c1 ->cargaHoraria = '24';
$c1 ->alunosMatriculados = '55';
$c1 ->areaDeConhecimento = 'Ciências Humanas';

echo "<h1>Aluno: {$a1->nome}</h1>";




// $aluno1 = [
//     'nome' => 'Alessandro',
//     'cpf' => '05612345678'
// ];

// $aluno2 = [
//     'nome' => 'João',
//     'cpf' => '12345678952'
// ];

// $aluno3 = [
//     'nome' => 'Maurício',
//     'cpf' => '11155522244'
// ];