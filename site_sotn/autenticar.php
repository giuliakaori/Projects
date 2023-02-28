<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castlevania SOTN | Login</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="img/Alucard_Shield_Icon.png" type="img/png" />
<link href="css/responsive_menu.css" rel="stylesheet" type="text/css" />
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='index.php'", 4000);
            }
            function failed(){
                setTimeout("window.location='login.html'", 4000);
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
 <div class="fundo_site">
 <br><br><br><br><br><br><br>
<div class="box_txt">
<?php
session_start();
	include 'conn.php';
            $user = $_POST["user"];
            $pass = $_POST["pass"];
			$sql="SELECT * FROM usuarios WHERE nome = '$user' AND senha = '$pass'";
			$consulta=mysqli_query($conexao,$sql);
            $linhas = mysqli_num_rows($consulta);
            
            if($linhas == 0){
				$_SESSION["loged"]=0;
                echo"<center><p>Falha no Login. Você será redirecionado para a página de login.</p></center>";
                echo"<script language='javascript'>failed()</script>";
            }
			else {
                $_SESSION["usuario"]=$_POST["user"];
                $_SESSION["senha"]=$_POST["pass"];
				$_SESSION["loged"]=1;
                echo"<center><p>Você foi logado com sucesso. Redirecionando para a tela inicial.</p></center>";
                echo"<script language='javascript'>sucesso()</script";
            }
        ?>
        </div>
        <br><br><br><br><br><br><br>
        </div>
    </body>
</html>