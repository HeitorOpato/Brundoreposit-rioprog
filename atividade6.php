<?php

class Conta {
    public $numeroConta;
    public $titular;
    public $saldo;

    public function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
        echo "Depósito de $valor realizado.\n";
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo = $this->saldo - $valor;
            echo "Saque de $valor realizado.\n";
        } else {
            echo "Saldo insuficiente para sacar $valor.\n";
        }
    }

    public function exibirSaldo() {
        echo "Titular: $this->titular\n";
        echo "Conta: $this->numeroConta\n";
        echo "Saldo Atual: R$ $this->saldo\n";
        echo "--------------------------\n";
    }
}

$minhaConta = new Conta();
$minhaConta->titular = "Heitor";
$minhaConta->numeroConta = "123-4";
$minhaConta->saldo = 500;

$minhaConta->exibirSaldo();
$minhaConta->depositar(200);
$minhaConta->sacar(100);
$minhaConta->exibirSaldo();

?>
