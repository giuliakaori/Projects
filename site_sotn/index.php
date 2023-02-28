<?php
	session_start();
	$user=$_SESSION["usuario"];
	if($user==null)
	{
	$loged=0;
	$_SESSION["loged"]= $loged;
	}
	
	else
	{
	$loged=1;
	$_SESSION["loged"]= $loged;
	}
	header ("location:home.html")
?>
