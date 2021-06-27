<html>
<body>

<?php

if(isset($_POST['enviar-formulario'])):
   //array de erros
    $erros = array();
//    $idade = $_POST['idade'];
//    $email = $_POST['email'];
//    $peso = $_POST['peso'];
//    $ip = $_POST['ip'];
//    $url = $_POST['url'];

//Validacao
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa ser um inteiro";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "Email invalido";
    endif;

    $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT);
    if(!filter_var($peso, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "Peso precisa ser um float";
    endif;

    $ip = filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_NUMBER_FLOAT);
    if(!filter_var(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = "Ip invalido";
    endif;

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL));
    if(!filter_var(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = "Url invalida";
    endif;

//mensagens de erros
    if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabens, seus dados estao corretos";
    endif;

endif;

?>
<!-- <form action="dados.php" method="POST"> -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
Idade: <input type="text" name="idade"/><br>
Email: <input type="text" name="email"/><br>
Peso:  <input type="text" name="peso"/><br>
IP:    <input type="text" name="ip"/><br>
URL:   <input type="text" name="url"/><br>

<button type="submit" name="enviar-formulario">Enviar</button><br>
</form>

    
</body>
</html>