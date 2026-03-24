<?php

class Triangulo {
    public $base;
    public $altura;
    public $ladoA;
    public $ladoB;
    public $ladoC;

    public function exibirInfo() {
        $area = ($this->base * $this->altura) / 2;

        if ($this->ladoA == $this->ladoB && $this->ladoB == $this->ladoC) {
            $tipo = "Equilatero (3 lados iguais)";
        } elseif ($this->ladoA == $this->ladoB || $this->ladoA == $this->ladoC || $this->ladoB == $this->ladoC) {
            $tipo = "Isosceles (2 lados iguais)";
        } else {
            $tipo = "Escaleno (todos os lados diferentes)";
        }

        echo "Triangulo: Base $this->base | Altura $this->altura\n";
        echo "Area: $area\n";
        echo "Tipo: $tipo\n";
        echo "--------------------------\n";
    }
}

$tri1 = new Triangulo();
$tri1->base = 10;
$tri1->altura = 8;
$tri1->ladoA = 10;
$tri1->ladoB = 10;
$tri1->ladoC = 10;
$tri1->exibirInfo();

$tri2 = new Triangulo();
$tri2->base = 10;
$tri2->altura = 5;
$tri2->ladoA = 10;
$tri2->ladoB = 8;
$tri2->ladoC = 6;
$tri2->exibirInfo();

?>