<?php

class Aluno {
    public $nome;
    public $matricula;
    public $notas;

    public function exibirDados() {
        $soma = array_sum($this->notas);
        $quantidade = count($this->notas);
        $media = $soma / $quantidade;

        if ($media >= 7) {
            $situacao = "APROVADO";
        } else {
            $situacao = "REPROVADO";
        }

        echo "Aluno: $this->nome | Matrícula: $this->matricula\n";
        echo "Média: $media | Situação: $situacao\n\n";
    }
}

$aluno1 = new Aluno();
$aluno1->nome = "Heitor";
$aluno1->matricula = "2026IF001";
$aluno1->notas = [8.5, 7.0, 9.0];
$aluno1->exibirDados();

$aluno2 = new Aluno();
$aluno2->nome = "Derick";
$aluno2->matricula = "2026IF002";
$aluno2->notas = [5.0, 6.5, 4.0];
$aluno2->exibirDados();

?>