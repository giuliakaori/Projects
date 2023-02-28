<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castlevania SOTN | Home</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="img/Alucard_Shield_Icon.png" type="img/png" />
<link href="css/responsive_menu.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<script language="javascript">
            function sucesso(){
                setTimeout("window.location='logado.php'", 3000);
            }
            function failed(){
                setTimeout("window.location='pass_redef.php'", 3000);
            }
        </script>
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

<br><br><br><br>
<div class="fundo_site">
<div class="box_txt">
<br><br><br><br>
<?php
include 'conn.php';
session_start();
$senha_nova=$_POST['senha_nova'];
$confirmacao=$_POST['confirmacao'];
$id=$_SESSION['id'];

if ($senha_nova == $confirmacao)
{
$sql="UPDATE usuarios SET senha = '$senha_nova',modified = NOW() where id='$id';";
$atualiza = mysqli_query($conexao,$sql);
echo "<p align='center'>Sua senha foi alterada com sucesso. Redirecionando para seu perfil.</p>";
echo"<script language='javascript'>sucesso()</script>";
} 
else
{
echo "<p align='center'>Sua nova senha está diferente da confirmação. Redirecionando para a página de confirmação.</p>";
echo"<script language='javascript'>failed()</script>";
}
?><br><br><br><br>
<br><br>
</div><!-- fim box_txt -->
</div><!-- fim fundo_site -->
<div class="rodape">
</div><!-- fim rodape -->
</body>
</html>
