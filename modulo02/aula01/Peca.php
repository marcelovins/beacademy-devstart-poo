<?php

declare(strict_types=1);

class Peca 
{
    public string $nome;
    public string $descricao;
    public float $preco;

    //exercicio Gets e Sets

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