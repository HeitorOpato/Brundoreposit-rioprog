<?php

class Livro {
    public $titulo;
    public $autor;
    public $npag;
    public $anopubli;
}
$livro1 = new Livro();
$livro1->titulo = "Moby Dick";
$livro1->autor = "	Herman Melville";
$livro1->npag = "213";
$livro1->anopubli = "1961";

echo "livro desejado é " . $livro1->titulo . " </br>"; 
echo "Autor " . $livro1->autor . " </br>"; 
echo "Numero de paginas " . $livro1->npag . " </br>"; 
echo "Ano de lançamento" . $livro1->anopubli . " </br>"; 

?>