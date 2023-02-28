<input type="checkbox" id="bt_menu">
 <label for="bt_menu">&#9776;</label>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castlevania SOTN | Usuário</title>
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
 <br><br><br><br> <br>
 <div class="fundo_site">
<div class="box_txt"><br><br>
<?php
include 'conn.php';
	session_start();
	$_SESSION["loged"]=true;
	$usuario=$_SESSION['usuario'];
	$sql="SELECT created from usuarios where nome='$usuario'";
	$consulta=mysqli_query($conexao,$sql);
	$mostrar=mysqli_fetch_array($consulta);
	foreach($mostrar as $created)

	$sql2="SELECT id from usuarios where nome='$usuario';";
	$consulta2=mysqli_query($conexao,$sql2);
	$mostrar2=mysqli_fetch_array($consulta2);
	foreach($mostrar2 as $id)

	
	$sql3="SELECT modified from usuarios where nome='$usuario';";
	$consulta3=mysqli_query($conexao,$sql3);
	$mostrar3=mysqli_fetch_array($consulta3);
	foreach($mostrar3 as $modified)
	if($modified == null)
	{
		$modified='-';
	}
	else{
		foreach($mostrar3 as $modified);
	}
	
	$sql4="SELECT mensagem from usuarios where nome='$usuario';";
	$consulta4=mysqli_query($conexao,$sql4);
	$mostrar4=mysqli_fetch_array($consulta4);
	foreach($mostrar4 as $mensagem)
	if($mensagem == null)
	{
		$mensagem1 = "<br>";
	}
	else{
		$mensagem1="<div class='msg'><p><strong>Mensagem do Administrador:</strong> $mensagem</p><br></div>";
	}

	echo "<p><strong>Usuário:</strong> $usuario</p><br>";
	echo "<p><strong>ID de Usuário:</strong> Nº $id</p><br>";
	echo "<p><strong>Criado em:</strong> $created</p><br>";
	echo "<p><strong>Última modificação:</strong> $modified</p><br>";
	echo  $mensagem1;
	
	echo "<a href='pass_redef.php' class='content'>Redefinir Senha</a><br><br>";
	echo "<hr><br><a href='index.php' class='content'>	Voltar ao Home</a><br><br>";
	echo "<a href='logout.php' class='content'>	Sair</a><br><br>";
?></div></div>
</body>
</html>