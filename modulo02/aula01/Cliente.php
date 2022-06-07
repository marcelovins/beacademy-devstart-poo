<?php

declare(strict_types=1);

class Cliente 
{
    public string $nome;
    public string $cpf;
    public string $cep;

    //exercicio método construtor

    public function __construct(string $novoNome, float $novoCpf)
    {
        $this->nome = $novoNome;
        $this->valor = $novoCpf;
    }

    //exercicio Gets e Sets

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
