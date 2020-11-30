<?php

$numero = 10;

if ($numero == 10) {
    echo "É igual a 10";
} else {
    echo "É diferente de 10";
}
echo "<hr>";
$media = 7;

echo ($media >= 7) ? "aprovado!"."<br>"."-------------"."<br>" : "reprovado!"."<br>"."-------------"."<br>";// operador ternario para substituir o if/else

$cor = "vermelho";

switch ($cor):

    case "verde":
        echo "A sua cor favorita e verde";
    break;

    case "vermelho":
        echo "A sua cor favorita e vermelho";
    break;

    case "azul":
        echo "A sua cor favorita e azul";
    break;

    default:
    echo "Sua cor favoria nao e vermelho, verde ou azul";

endswitch;