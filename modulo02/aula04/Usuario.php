<?php

declare(strict_types=1);

abstract class Usuario //abstratct=> essa palavra foi adicionada para informar que esta classe é abstrata, não pode ser usada. serve apenas como base para outras classes (classe pai).
{
    private string $nome;
    private string $email;
    private string $cpf;
    private string $senha;
    // private string $dataCadastro;

    public function __construct(string $novoNome, string $email, string $cpf, string $senha)
    {
        $this->nome = $novoNome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;

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

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

}