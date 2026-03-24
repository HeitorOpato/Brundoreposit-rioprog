<?php

class Produto {
    public $nome;
    public $preco;
    public $estoque;

    public function adicionar($quantidade) {
        $this->estoque = $this->estoque + $quantidade;
        echo "Adicionado: $quantidade unidades de $this->nome\n";
    }

    public function remover($quantidade) {
        if ($quantidade <= $this->estoque) {
            $this->estoque = $this->estoque - $quantidade;
            echo "Removido: $quantidade unidades de $this->nome\n";
        } else {
            echo "Erro: Nao temos $quantidade no estoque!\n";
        }
    }

    public function exibirDados() {
        $valorTotal = $this->preco * $this->estoque;

        echo "Produto: $this->nome\n";
        echo "Preco: R$ $this->preco\n";
        echo "Quantidade: $this->estoque\n";
        echo "Valor Total: R$ $valorTotal\n";
        echo "--------------------------\n";
    }
}

$prod = new Produto();
$prod->nome = "Caderno Dark Academia";
$prod->preco = 45.90;
$prod->estoque = 50;

$prod->exibirDados();
$prod->adicionar(10);
$prod->remover(5);
$prod->exibirDados();

?>

