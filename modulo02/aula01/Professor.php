<?php

declare(strict_types=1);

class Professor 
{
    public string $nome;
    public string $cpf;
    public float $salario;

    //exercicio método construtor

    public function __construct(string $novoNome, float $novoCpf)
    {
        $this->nome = $novoNome;
        $this->valor = $novoCpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): float
    {
        return $this->cpf;
    }
     
    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function setCpf(float $novoCpf): void
    {
       
        $this->cpf = $novoCpf;
    }
    
}
