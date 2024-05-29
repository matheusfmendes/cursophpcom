<?php 
echo "Digite o seu nome: \n";
$nome =  (string) fgets(STDIN);
echo "Digite o ano: \n";
$ano_atual = (Double) fgets(STDIN);
echo "Digite o ano do seu aniversario: \n";
$ano_nascimento = (Double) fgets(STDIN);

$idade = $ano_atual - $ano_nascimento;
echo "Digite a sua autura: \n"
$altura = (float) fgets(STDIN);;

echo "Meu nome é ".$nome.",minha idade é ".$idade." e minha altura é ".$altura;
?>
