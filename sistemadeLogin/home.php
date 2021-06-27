<?php
require_once 'db_connect.php';
session_start();
if(!isset($_SESSION['logado'])){
	header('Location: index.php');
}
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<html>
<head>
<meta charset="utf-8">
<title>Pagina Restrita</title>
</head>
<body>
	<h1>Ola <?php echo $dados['nome'];?></h1>
	<a href="logout.php">Sair</a>

</body>
</html>