<?php

function exibirNome($nome)
{
    echo "meu nome e: $nome";
}

exibirNome("Matheus");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7):
        echo "$nome foi aprovado com a media $media !";
        
    else:
        echo "$nome foi reprovado com a media $media";
    endif;
}
calcularMedia("bob", 5, 6, 2, 6);