<?php

declare(strict_types=1);

class Usuario 
{
    private string $nome;
    private string $email;
    private string $cpf;
    private string $senha;
    // private string $dataCadastro;

    public function __construct(string $novoNome)
    {
        $this->nome = $novoNome;

    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

}