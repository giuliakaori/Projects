<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castlevania SOTN | ADM | Control Room</title>
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="../img/Alucard_Shield_Icon.png" type="img/png" />
<link href="../css/estilo.css" rel="stylesheet" type="text/css" />
<link href="../css/responsive_menu.css" rel="stylesheet" type="text/css" />
</head>
<?php
session_start();
$adm=$_SESSION["adm"];
if($adm==null)
{
$adm_loged=0;
$_SESSION["adm_loged"]= $adm_loged;
header ("location:index.php");
}
?>
<body id="body-adm">
<input type="checkbox" id="bt_menu">
 <label for="bt_menu">&#9776;</label>
<nav class="menu">
  <ul>
  <li><a href="index.php">&#9776; Controle</a>
  <ul>
		<li><a href="users_list.php">Usuários Cadastrados</a></li>
        <li><a href="users_msg.php" align="center">Envio de Mensagens</a></li>
		<li><a href="logout.php" class="droplogin"><img src="../img/logout.svg" width="20" height="15px" /> Logout </a></li>
    </ul>
  </ul>
 </nav><!-- Fim Menu_Dropdown -->
<br><br>
<div class="fundo_adm">
<div class="box_txt"><br>
<h1 align="center" style="text-indent:0; color:#FFFFF0">Página do Administrador</h1>
<p align="center" style="text-indent:">Vá para a aba <strong>"&#9776; Controle"</strong> e escolha a função desejada</p>
<br>
</div>
<a href="logout.php" class="content" style="text-indent:0em"><img src="../img/logout.svg" width="20" height="15px" /> Logout </a>
<br><br><br>
</div><!-- fim fundo_site -->
<div class="rodape">
</div><!-- fim rodape -->
</body>
</html>