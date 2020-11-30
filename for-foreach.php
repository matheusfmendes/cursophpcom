<?php

for($contador = 0; $contador <= 10; $contador++):
    echo "O contador e: $contador <br>";
endfor;
echo "<hr>";
$cores = array("verde","azul","roxo");
foreach($cores as $valor):
    echo $valor."<br>";
endforeach;