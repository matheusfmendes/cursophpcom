<?php

$idade = 25;
$nome = "Rodrigo";

if (($idade == 25) && ($nome == "Rodrigo")) :
    echo "E veradeiro";
else :
    echo "E falso";

    if (($idade == 25) || ($nome == "Rodrigo")) {


        echo "E veradeiro";
    } else {
        echo "E falso";
    }

    if (($idade == 26) xor ($nome == "Carlos")) {


        echo "E veradeiro";
    } else {
        echo "E falso";
    }
endif;
