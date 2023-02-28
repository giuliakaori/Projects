<?php 
$servidor="localhost";
$bancodados="SOTNusers";
$usuario="root";
$senha="";
$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);
mysqli_select_db($conexao, $bancodados);
?>