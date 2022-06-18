<?php

declare(strict_types=1);

class Aluno {
    private string $nome;
    private string $cpf;

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }

    public function getCpf() : string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf) : void
    {
        $this->cpf = $cpf;
    }
}

