<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castlevania SOTN | LoginADM</title>
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="../img/Alucard_Shield_Icon.png" type="img/png" />
<link href="../css/responsive_menu.css" rel="stylesheet" type="text/css" />
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='index.php'", 3000);
            }
            function failed(){
                setTimeout("window.location='loginADM.html'", 3000);
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
            $adm = $_POST["adm"];
            $adm_senha = $_POST["adm_senha"];
			$sql="SELECT * FROM adm WHERE adm_nome = '$adm' AND adm_senha = '$adm_senha'";
			$consulta=mysqli_query($conexao,$sql);
            $linhas = mysqli_num_rows($consulta);
            
            if($linhas == 0){
				$_SESSION["adm_loged"]=0;
                echo"<center><h1>Falha no Login. Você será redirecionado para a página de login.</h1></center>";
                echo"<script language='javascript'>failed()</script>";
            }
			else {
				
                $_SESSION["adm"]=$_POST["adm"];
                $_SESSION["adm_senha"]=$_POST["adm_senha"];
				$_SESSION["adm_loged"]=1;
                echo"<center><h1>Você foi logado com sucesso. Redirecionando para a sala de controle.</h1></center>";
                echo"<script language='javascript'>sucesso()</script";
            }
        ?>
        </div>
        <br><br><br><br><br><br><br>
        </div>
    </body>
</html>