<!-- logout.php !-->
<?php
	include '../conn.php';
	session_start();
	$adm=$_SESSION["adm"];
	$sql="SELECT adm_id from adm where adm_nome='$adm'";
	$consulta=mysqli_query($conexao,$sql);
	$mostrar=mysqli_fetch_array($consulta);
	foreach($mostrar as $adm_id)
	
	$sql2="UPDATE adm SET adm_last_logout = NOW() where adm_id='$adm_id';";
	$atualiza = mysqli_query($conexao,$sql2);
    
    session_destroy();
    header ("Location: index.php");
?>