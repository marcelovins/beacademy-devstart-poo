<?php

declare (strict_types=1);

class ValidarCepUS implements Validar 
{
    public function validarDocumento(string $documento): void
    {
        if (strlen($documento) !== 6) {
            die('Código Postal inválido');
        }
    }
}

