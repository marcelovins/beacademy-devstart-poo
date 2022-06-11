<?php

declare(strict_types=1);

abstract class Validar 
{
    public static function validarCpf(string $cpf): void  //static=> usei a palavra para acessar diretamente, sem instanciar, o método validarCpf
    {
        if (strlen($cpf) !== 11) {
            die('ops, cpf inválido!');
        }
    }
}