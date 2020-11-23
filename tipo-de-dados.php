<?php

/*********Escalares**************/
//string
$nome = 'Olá Mundo!';

var_dump($nome);

if (is_string($nome)) :
    echo "É uma string!";
else :
    echo "Não e uma string!";
endif;

echo "<hr>";

$idade = 10;

var_dump($idade);

if (is_int($idade)) :
    echo "É um inteiro!";

else :
    echo "Não e um inteiro!";
endif;

echo "<hr>";

$altura = 1.80;

var_dump($altura);

if (is_float($altura)) :
    echo "Isso é um float!";
else :
    echo "Não e um float!";
endif;

echo "<hr>";

$admin = true;

var_dump($admin);

if (is_float($admin)) :
    echo "Isso é um booleano!";
else :
    echo "Não e um booleano!";
endif;

echo "<hr>";

$carros = array("gol", "uno", "corsa");

var_dump($carros);

if (is_array($carros)) :
    echo "Isso é um array!";
else :
    echo "Não e um array!";
endif;

echo "<hr>";

class Cliente
{
    public $nome;
    public function atribuirNome($nome)
    {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();

$cliente->atribuirNome("Matheus");

var_dump($cliente);

if (is_object($cliente)) :
    echo "Isso é um objeto!";
else :
    echo "Não e um objeto!";
endif;

echo "<hr>";