<?php

class Funcionario{
    public $nome;
    public $cargo;
    public $salario;
    public $adim;
}  

$func = new Funcionario();
$func->nome = "Balaio";
$func->cargo = "Famer";
$func->salario = 1; 
$func->adim = "82/02/7777";

$salmax = 12 * $func->salario;

echo "Funcionario: " . $func->nome . "</br>";
echo "Cargo: " . $func->cargo . "</br>";
echo "Salario: " . $func->salario . " real</br>";
echo "Adeção a empresa: " . $func->adim . "</br>";
echo "Salario anual do funcionario é: $salmax reais";

?>