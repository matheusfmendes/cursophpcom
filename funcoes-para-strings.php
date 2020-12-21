<?php
$nome = "matheus mendes";
$novonome = strtoupper($nome);
echo $novonome . "<br>";;

$nome = "matheus mendes";
$novonome = strtolower($nome);
echo $novonome . "<br>";

$mensagem = "Ola mundo!";
echo substr($mensagem, 4). "<br>";

$obj = "mouse";
echo str_pad($obj, 7, "**"). "<br>";
