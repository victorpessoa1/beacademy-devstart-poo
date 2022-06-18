<?php

declare(strict_types=1);

class Gestor extends Usuario
{

    private float $salario;
    private string $horario;

    public function __construct(string $email, string $senha, float $salario) 
    {
        parent::setEmail($email);
        parent::setSenha($senha);
        $this->salario = $salario;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        return $this->salario = $salario;
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function setHorario($horario)
    {
        return $this->horario = $horario;
    }
}