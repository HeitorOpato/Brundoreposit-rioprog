<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velomax;
    public $veloAtual = 0;

    
public function __construct($marca, $modelo, $ano, $cor, $velomax) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->velomax = $velomax;
    }

    public function acelerar($quantidade) {
        $novaVelocidade = $this->veloatual + $quantidade;
        if ($novaVelocidade <= $this->velomax) {
            $this->veloAtual = $novaVelocidade;
        } else {
            $this->veloAtual = $this->velomax;
        }
        echo "Acelerando... Velocidade atual: {$this->veloatual} km/h\n";
    }

    public function frear($quantidade) {
        $this->veloAtual -= $quantidade;
        if ($this->veloAtual < 0) {
            $this->veloAtual = 0;
        }
        echo "Freando... Velocidade atual: {$this->velocidadeAtual} km/h\n";
    }

    public function exibirInformacoes() {
        echo "Carro: {$this->marca} {$this->modelo} ({$this->ano}) - Cor: {$this->cor}\n";
    }
}

// Testando o Carro
$meuCarro = new Carro("Toyota", "Corolla", 2024, "Preto", 210);
$meuCarro->exibirInformacoes();
$meuCarro->acelerar(50);
$meuCarro->frear(20);



