<?php

$servername = "localhost";
$username = "root";
$senha = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $senha, $db_name);

if(mysqli_connect_error()){
	echo "Falha na conexao:".mysqli_connect_error();
}