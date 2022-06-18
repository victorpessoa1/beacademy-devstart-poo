<?php

declare(strict_types=1);

final class Cliente extends Usuario
{
    private string $dataCadastro;

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro($dataCadastro)
    {
        return $this->dataCadastro = $dataCadastro;
    }

}