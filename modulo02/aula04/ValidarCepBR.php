<?php

declare (strict_types=1);

class ValidarCepBR implements Validar 
{
    public function validarDocumento(string $documento): void
    {
        if (strlen($documento) !== 8) {
            die('CEP inválido');
        }
    }
}