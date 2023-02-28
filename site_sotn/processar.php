<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castlevania SOTN | Cadastro</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="img/Alucard_Shield_Icon.png" type="img/png" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/responsive_menu.css" rel="stylesheet" type="text/css" />
 <script language="javascript">
            function sucesso(){
                setTimeout("window.location='login.html'", 4000);
            }
            function failed(){
                setTimeout("window.location='cadastro.html'", 4000);
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
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
    <br><br><br><br><br><br><br>
     <div class="fundo_site">
     <br><br><br><br><br>
<div class="box_txt">
        <?php
		include 'conn.php';
		session_start();
		$_SESSION["loged"]=0;
            $user = $_POST["nome"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
$sql="SELECT * FROM usuarios WHERE nome='$user'";
$consulta = mysqli_query($conexao,$sql);
$linha = mysqli_num_rows($consulta);
	if($linha == 0){
	// o usuário não existe, faça a inserção do mesmo;
$token = bin2hex(random_bytes(50));
	$inserir = "INSERT INTO usuarios (nome, email, senha, created, token) VALUES ('$user', '$email', '$pass', NOW(), '$token');";
				mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));
				echo "<center><p>Você foi cadastrado com sucesso. Aguarde ser redirecionado para fazer login.</p></center>";
				echo"<script language='javascript'>sucesso()</script>";
	}
	else
	{
		// o usuário existe;
				echo "<center><p>Usuário existente, redirecionando para a tela de cadastro.</p></center>";
				echo "<script language='javascript'>failed()</script>";
}
        ?>
        </div>
        <br><br><br></div>
    </body>
</html>