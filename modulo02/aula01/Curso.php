<?php

declare(strict_types=1);

class Curso {
    public int $cargaHoraria;
    public string $alunosMatriculados;
    public string $areaDeConhecimento;

    public function getCargaHoraria(): int
    {
        return $this->cargaHoraria;
    }

    public function getAlunosMatriculados(): string
    {
        return $this->alunosMatriculados;
    }
     
    public function setCargaHoraria(int $novaCargaHoraria): void
    {
        $this->nome = $novaCargaHoraria;
    }

    public function setAlunosMatriculados(string $novosAlunosMatriculados): void
    {
        $this->alunosMatriculados = $novosAlunosMatriculados;
    }
    

}