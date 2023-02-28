<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		$_SESSION["loged"]=0;
        header ("Location: cadastro.html");
        exit;
    }
	else
	{
		$_SESSION["loged"]=1;
		header ("Location: logado.php");
	}
	
?>