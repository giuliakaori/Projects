<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castlevania SOTN | ADM | Usuários</title>
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo.css" rel="stylesheet" type="text/css" />
<link href="../css/responsive_menu.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="../img/Alucard_Shield_Icon.png" type="img/png" />
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='users_list.php'", 3000);
            }
			function sucesso2(){
                setTimeout("window.location='users_list.php'", 3000);
            }
            function failed(){
                setTimeout("window.location='users_msg.php'", 5000);
            }
        </script>
</head>
<body id="body-adm">

 <div class="fundo_adm">
 <br><br><br><br><br><br><br>
<div class="box_txt">
<?php
session_start();
	include '../conn.php';
	
            $user_id = $_POST["user_id"];
            $user_nome = $_POST["username"];
			$msg=$_POST['mensagem'];
			$decide=$_POST['decide'];
if($msg==null)
{
	$msg=null;
}

			if($decide==1)
				{
				$sql2="UPDATE usuarios SET mensagem = '$msg';";
				$atualiza = mysqli_query($conexao,$sql2);
                echo"<center><h1>Mensagem enviada com sucesso para todos os usuários cadastrados</h1></center>";
                echo"<script language='javascript'>sucesso2()</script";
				}
			else
			{	
						$sql="SELECT * FROM usuarios WHERE id = '$user_id' AND nome = '$user_nome'";
			$consulta=mysqli_query($conexao,$sql);
            $linhas = mysqli_num_rows($consulta);
            if($linhas == 0){
                echo"<center><h1>Falha no envio da mensagem. Talvez o ID ou o usuário estejam inválidos.</h1></center>";
                echo"<script language='javascript'>failed()</script>";
            }
			else {
				$sql1="UPDATE usuarios SET mensagem = '$msg' where id='$user_id' and nome = '$user_nome';";
				$atualiza = mysqli_query($conexao,$sql1);
                echo"<center><h1>Mensagem enviada com sucesso para ".$user_nome.", ID ".$user_id."</h1></center>";
                echo"<script language='javascript'>sucesso()</script";
            }
		}
        ?>
        </div>
        <br><br><br><br><br><br><br>
        </div>
    </body>
</html>