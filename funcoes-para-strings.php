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

$string = str_repeat("mouse ", 2);
echo $string;

echo "<hr>";

$mensagem = "ola mundo";

echo strlen ($mensagem);

echo "<hr>";

$text = "A selecao Argentina sera a campea da copa do mundo";

$novotext = str_replace("Argentina", "Brasil", $text);
echo $novotext;
echo "<hr>";
echo strpos($text, "copa");