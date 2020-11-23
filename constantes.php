<?php
define("NOME", "José Carlos"); //sempre em letras maiuscula!
define("IDADE", 25);
define("ALTURA", 1.80);
define("CASADO", true);

echo "meu nome é " . NOME . ", minha idade é " . IDADE . " e altura " . ALTURA;
echo "<br>";

function exibeNome()
{
    echo NOME;
}
exibeNome();