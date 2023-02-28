<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castlevania SOTN | ADM | Usuários</title>
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo.css" rel="stylesheet" type="text/css" />
<link href="../css/responsive_menu.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="../img/Alucard_Shield_Icon.png" type="img/png" />
</head>
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
 <br><br><br><br> 
 <div class="fundo_adm">
<div class="box_txt">
<h1 align="center" style="color:#800000">Envio de mensagens para usuários</h1>
<p>Para limpar as mensagens existentes, deixar o campo "mensagem" em branco</p>

<form method="post" action="mensagem.php">
	  <input type="text" name="user_id" size="5" placeholder="ID">
      <input type="text" name="username" placeholder="Nome do Usuário"><br /><br />
      <textarea name="mensagem" cols="50" rows="5" placeholder="Mensagem (até 500 caracteres)"></textarea>
      <br><br>
      <label><input type="radio" name="decide" value="0" id="decide_1" />
              Enviar para apenas o ID correspondente
              </label>&nbsp;&nbsp;&nbsp;&nbsp;
      <label><input type="radio" name="decide" value="1" id="decide_0" />
              Enviar para TODOS os usuários</label>
      <br><br><input type="submit" value="Enviar">
</form>
</div></div>
</body>
</html>