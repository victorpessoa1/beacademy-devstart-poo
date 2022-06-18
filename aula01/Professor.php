<?php

declare(strict_types=1);

class Professor {
    private string $nome;
    private float $salario;
    private string $cpf;

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    }

    public function getSalário() : float
    {
        return $this->salario;
    }

    public function setSalario(float $salario) : void
    {
        $this->salario = $salario;
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