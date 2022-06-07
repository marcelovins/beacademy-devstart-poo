<?php

declare(strict_types=1);

//atributos
class Produto 
{
    //atributos
    private string $nome;
    private float $valor;

    
    //métodos
//     public function teste(): string
//     {
//         return 'você está testando';
//     }

    //exercício fazer pegarNome e alterarNome e Valor

    // 
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
     
    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function setValor(float $novoValor): void
    {
        if ($novoValor < 0) {
            die('ops! valor não pode ser negativo!');
        }
        $this->valor = $novoValor;
    }
    


}




