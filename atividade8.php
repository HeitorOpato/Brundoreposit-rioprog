<?php

class Circulo {
    public $raio;

    public function exibirResultados() {
        $pi = 3.14;
        $area = $pi * ($this->raio * $this->raio);
        $perimetro = 2 * $pi * $this->raio;

        echo "Circulo com raio: $this->raio\n";
        echo "Area: $area\n";
        echo "Perimetro: $perimetro\n";
        echo "--------------------------\n";
    }
}

$meuCirculo = new Circulo();
$meuCirculo->raio = 5;
$meuCirculo->exibirResultados();

$outroCirculo = new Circulo();
$outroCirculo->raio = 10;
$outroCirculo->exibirResultados();

?>