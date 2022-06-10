<?php

declare(strict_types=1);

class Categoria 
{
        public function __construct(             //forma de fazer construct diretamente no PHP 8.0
        private string $nome,
        private string $descricao
    ) {

    }
    // public function __construct(string $novoNome, float $novoValor)
    // {
    //     $this->nome = $novoNome;
    //     $this->valor = $novoValor;
    // }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
     
    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function setDescricao(string $novaDescricao): void
    {
        
        $this->descricao = $novaDescricao;
    }
}