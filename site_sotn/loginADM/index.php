<?php
session_start();
	$adm=$_SESSION["adm"];
	if($adm==null)
	{
	$adm_loged=0;
	$_SESSION["adm_loged"]= $adm_loged;
	header ("location:loginADM.html");
	}
	
	else
	{
	$adm_loged=1;
	$_SESSION["adm_loged"]= $adm_loged;
	header ("location:control.php");
	}
?>
