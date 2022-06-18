<?php

declare(strict_types=1);

class Produto 
{
    //Atributos
    private string $nome;
    private float $valor;


    //Métodos
    public function teste(string $palavra): string
    {
        return "Você está testando a palavra {$palavra}";
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }
    public function getValor(): float
    {
        return $this->valor;
    }
    public function setValor(float $novoValor): void 
    {
        if ($novoValor < 0){
            die('Ops, valor não pode ser negativo');
        }
        
        $this->valor = $novoValor;
    }

}