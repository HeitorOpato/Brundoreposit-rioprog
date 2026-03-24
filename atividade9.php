<?php

class Pessoa {
    public $nome;
    public $idade;
    public $genero;

    public function exibirInformacoes() {
        echo "Nome: $this->nome\n";
        echo "Genero: $this->genero\n";
        echo "Idade: $this->idade anos\n";
        echo "--------------------------\n";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = "Heitor";
$pessoa1->idade = 17;
$pessoa1->genero = "Masculino";
$pessoa1->exibirInformacoes();

$pessoa2 = new Pessoa();
$pessoa2->nome = "Sarah";
$pessoa2->idade = 16;
$pessoa2->genero = "Feminino";
$pessoa2->exibirInformacoes();

?>
