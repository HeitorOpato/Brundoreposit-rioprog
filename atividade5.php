<?php

class Retangulo {
    public $comprimento;
    public $largura;

    public function exibirDados() {
        $area = $this->comprimento * $this->largura;
        $perimetro = 2 * ($this->comprimento + $this->largura);

        echo "Retângulo: $this->comprimento x $this->largura\n";
        echo "Área: $area m²\n";
        echo "Perímetro: $perimetro m\n\n";
    }
}

$ret = new Retangulo();
$ret->comprimento = 10;
$ret->largura = 5;
$ret->exibirDados();

$ret2 = new Retangulo();
$ret2->comprimento = 20;
$ret2->largura = 10;
$ret2->exibirDados();

?>