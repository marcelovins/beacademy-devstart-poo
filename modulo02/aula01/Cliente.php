<?php

declare(strict_types=1);

class Cliente 
{
    public string $nome;
    public string $cpf;
    public string $cep;

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
