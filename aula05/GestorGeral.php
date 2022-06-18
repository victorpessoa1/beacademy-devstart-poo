<?php

declare(strict_types=1);

class GestorGeral extends Gestor 
{
    private float $bonusAnual;

    public function getBonusAnual()
    {
        return $this->bonusAnual;
    }

    public function setBonusAnual($bonusAnual)
    {
        return $this->bonusAnual = $bonusAnual;
    }

}