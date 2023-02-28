<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castlevania SOTN | Detonado (Need Login)</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/responsive_menu.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="img/Alucard_Shield_Icon.png" type="img/png" />
</head>
<body>
<input type="checkbox" id="bt_menu">
 <label for="bt_menu">&#9776;</label>

<nav class="menu">
  <ul>
  <li><a href="#">&#9776; Menu</a>
  <ul>
		<li><a href="bestiario.html">Bestiário</a></li>
		<li><a href="areas.html">Áreas do Castelo</a></li>
        <li><a href="artworks.html">Artworks</a></li>
		<li><a href="soundtrack.html">SoundTrack</a></li>
    </ul>
<li><a href="index.php">Home</a></li>
<li><a href="#">Estratégia</a>
<ul>
 <li><a href="verify.php">Detonado</a></li>
<li><a href="verify2.php">Dicas</a></li>
<li><a href="verify3.php">Special Moves</a></li>
</ul>
<li><a href="#">Itens</a>
		<ul>
			<li><a href="itens_ataque.html">Itens de Ataque</a></li>
			<li><a href="itens_comida.html">Comida</a></li>
			<li><a href="itens_consumiveis.html">Itens Consumiveis</a></li>
			<li><a href="itens_relics.html">Relics</a></li>
		</ul>
         <li><a href="#">Extras</a>
			<ul>
				<li><a href="verify5.php">Curiosidades</a>
			</ul>
		<li><a href="escolha.php" class="droplogin"><img src="img/avatar.svg" width="20" height="15px" /> Login </a></li>
  </ul>
 </nav><!-- Fim Menu_Dropdown -->
<br><br>
<div class="fundo_site">
<div class="box_txt">
<br><br><br>
<?php
session_start();
$loged=0;
$loged = $_SESSION["loged"];
if ($loged == 1)
{
	header ("Location: detonado.html");
}
else {
	echo "<center><h3 style='text-indent:0em;'>Faça Login ou Cadastre-se para conseguir acesso a essa página</h3>
	<a href='cadastro.html' class='content'>Cadastre-se Aqui</a><br><br>
	<a href='login.html' class='content'>Faça Login Aqui</a>
	</center>";
	}
?>
<br><br><br>
</div>
</div>
</body>
</html>