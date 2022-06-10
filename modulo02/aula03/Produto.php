<?php

declare(strict_types=1);

//atributos
class Produto 
{

    // public function __construct(             //forma de fazer construct diretamente no PHP 8.0
    //     private string $nome,
    //     private float $valor
    // ) {

    // }

    //atributos
    private string $nome;
    private float $valor;
    private string $descricao;
    private readonly Categoria $categoria; //quando coloco readonly não é permitido método set neste objeto

    //método mágico de construção do objeto
    public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;
        $this->categoria = $categoria;
    }

    
    //métodos
//     public function teste(): string
//     {
//         return 'você está testando';
//     }

    //exercício fazer pegarNome e alterarNome e Valor

    // 
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
     
    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function setValor(float $novoValor): void
    {
        if ($novoValor < 0) {
            die('ops! valor não pode ser negativo!');
        }
        $this->valor = $novoValor;
    }

    public function setCategoria(Categoria $categoria): void
    {
        $this->categoria = $categoria;
    }
    


}




