<?php

declare(strict_types=1);

class Gestor extends Usuario
{
    // private string $nome;
    // private string $email;
    // private string $cpf;
    // private string $senha;
    private float $salario;
    private string $horario;

    public function __construct(string $novoNome, string $email, string $cpf, string $senha, float $salario, string $horario)
    {
        // parent::$nome = $novoNome;
        // parent::$email = $email;
        // parent::$cpf = $cpf;
        // parent::$senha = $senha;
        parent::setNome($novoNome);
        parent::setEmail($email);
        parent::setCpf($cpf);
        parent::setSenha($senha);
        $this->salario = $salario;
        $this->horario = $horario;

    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function gethorario(): string
    {
        return $this->horario;
    }

    public function setHorario(string $horario): void
    {
        $this->horario = $horario;
    }

    // public function getCpf(): string
    // {
    //     return $this->cpf;
    // }

    // public function setCpf(string $cpf): void
    // {
    //     $this->cpf = $cpf;
    // }

}