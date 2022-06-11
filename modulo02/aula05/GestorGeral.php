<?php

declare(strict_types=1);

class GestorGeral extends Gestor
{
    // private string $nome;
    // private string $email;
    // private string $cpf;
    // private string $senha;
    private float $bonusAnual;

    public function __construct(string $novoNome, string $email, string $cpf, string $senha, float $salario, string $horario, float $bonusAnual)
    {
        // parent::$nome = $novoNome;
        // parent::$email = $email;
        // parent::$cpf = $cpf;
        // parent::$senha = $senha;
        parent::setNome($novoNome);
        parent::setEmail($email);
        parent::setCpf($cpf);
        parent::setSenha($senha);
        parent::setSalario($salario);
        parent::setHorario($horario);
        $this->bonusAnual = $bonusAnual;

    }

    public function getBonusAnual(): float
    {
        return $this->getBonusAnual;
    }

    public function setBonusAnual(float $bonusAnual): void
    {
        $this->bonusAnual = $bonusAnual;
    }
}