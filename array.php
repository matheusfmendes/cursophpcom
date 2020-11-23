<?php

$carros = array("bmw", "hilux", "mercedes");

$carros[] = "amarok";

echo $carros[10] = "camaro";

echo $carros[10];

print_r($carros);
//echo "<br>";

echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuky";

echo $motos[5];

echo "<br>";

echo "<hr>";

$clientes = ["Rodrigo", "Felipe", "Bia"];

print_r($clientes);

echo "<hr>";

//count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//foreach
foreach ($carros as $valor) {
    echo $valor . "<br>";
}
echo "<hr>";
//array associativos
$pessoa = array("nome" => "Rodrigo", "idade" => 26, "altura" => 1.75);
$pessoa["cidade"] = "Brasilia";

foreach ($pessoa as $indice => $var) {
    echo $indice . ":" . $var . "<br>";
}
echo "<hr>";

$times = array(
    "cariocas" => array("Flamengo", "Botafogo", "fluminense"),
    "paulista" => array("Santos", "Sao Paulo", "Palmeiras"),
    "baianos" => array("Bahia", "Vitoria")
);

foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

echo "<hr>";

foreach ($times["paulista"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

echo "<hr>";

foreach($times ["baianos"] as $indice => $valor){
    echo $indice . ":" . $valor . "<br>";
}

echo "<hr>";

$frase = "meu nome não e johnny";

$array = explode(" ",$frase);
print_r($array);

echo "<hr>";

$nomes = array("Rodrigo","Carlos", "jorge");

$string = implode(" ",$nomes);
print_r($string);