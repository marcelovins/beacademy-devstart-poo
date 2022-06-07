<?php

declare(strict_types=1);

class Aluno 
{
    public string $nome;
    public string $cpf;
    public string $curso;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): float
    {
        return $this->cpf;
    }

    public function getCurso(): float
    {
        return $this->curso;
    }
     
    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function setCpf(float $novoValor): void
    {
       
        $this->cpf = $novoValor;
    }
    
}