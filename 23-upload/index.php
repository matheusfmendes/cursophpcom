<html>
<body>

<?php
if(isset($_POST['enviar-formulario'])){
	$quantidadeArquvios = count($_FILES['arquivos']['name']);
	$contador = 0;
	$formatosPermitdos = array("png", "jpg", "gif");

	while($contador < $quantidadeArquvios){

	$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
	//echo $extensao;
	
	if(in_array($extensao, $formatosPermitdos)){
		$pasta = "arquivos/";
		$temporario = $_FILES['arquivo']['temp_name'][$contador];
		$novoNome = uniqid().".$extensao";
		// echo "Existe";
		if(move_uploaded_file($temporario, $pasta.$novoNome)){
			echo "Upload feito com sucesso para ".$novoNome;
		}else{
			echo "Error nao foi possivel fazer o upload";
		}

	}else{
	 echo $extensao." Formato invalido";
	}
$contador++;
}
}

?>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" >

	<input type="file" name="arquivo[]" multiple><br>
	<button type="submit" name="enviar-formulario"></button>





</form>





</body>

</html>