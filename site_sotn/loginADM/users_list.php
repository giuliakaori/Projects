<input type="checkbox" id="bt_menu">
 <label for="bt_menu">&#9776;</label>
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
<table width="940" border="0" cellspacing="5" cellpadding="5">
  <tr height="40px" align="center" style="margin-top:5">
    <td width="29" height="40" bgcolor="#800000">
      <p style="color:#fff" ><strong><br>ID</strong></p></td>
    <td width="124" bgcolor="#800000">
      <p style="color:#fff"><strong><br>Nome</strong></p>
    </td>
    <td width="174" bgcolor="#800000">
      <p style="color:#fff"><strong><br>E-Mail</strong></p>
    </td>
    <td width="143" bgcolor="#800000">
      <p style="color:#fff"><strong><br>Criado em</strong></p>
    </td>
    <td width="147" bgcolor="#800000">
      <p style="color:#fff"><strong><br>Última Modificação</strong></p>
    </td>
    <td width="283" bgcolor="#800000">
      <p style="color:#fff"><strong><strong><br>Mensagem</strong></p>
   </td>
  </tr>

<?php
include '../conn.php';
	$sql="SELECT * from usuarios";
	$consulta=mysqli_query($conexao,$sql);
	while($mostrar=mysqli_fetch_assoc($consulta))
	{
		if($mostrar['modified']==null)
		{
		$mostrar['modified']="-";	
	}
	if($mostrar['mensagem']==null)
		{
		$mostrar['mensagem']="-";	
	}
echo "<tr align='center' height='40px' style='margin-top:5'>";	
echo "<td bgcolor='#FFFFFF'><br>$mostrar[id]<br></td>";
echo "<td bgcolor='#E8E8E8'><br>$mostrar[nome]<br></td>";
echo "<td bgcolor='#FFFFFF'><br>$mostrar[email]<br></td>";
echo "<td bgcolor='#E8E8E8'><br>$mostrar[created]<br></td>";
echo "<td bgcolor='#FFFFFF'><br>$mostrar[modified]<br></td>";
echo "<td bgcolor='#E8E8E8'><br>$mostrar[mensagem]<br></td></tr>";
	}

?></table></div></div>
</body>
</html>