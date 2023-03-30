<?php


 session_start();
if (!isset($_SESSION["user"]))
  header("location:err.htm");
 ?>
 <html>
<head>
<title>Mail</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../design.css">
    
<link href="menus/style.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="menus/script.js" type="text/JavaScript"></script>


</head>

<body  onLoad="MM_preloadImages('menus/img/dec/Sans%20titre-14_r2_c2_f2.gif','menus/img/acc/Sans%20titre-14_r2_c2_f3.gif','menus/img/acc/Sans%20titre-14_r2_c2_f2.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f3.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f2.gif','menus/img/mail/Sans%20titre-14_r2_c2_f3.gif','menus/img/mail/Sans%20titre-14_r2_c2_f2.gif','menus/img/mail/read/s_menu_r2_c2_f3.gif','menus/img/mail/read/s_menu_r2_c2_f2.gif','menus/img/mail/send/s_menu_r2_c2_f3.gif','menus/img/mail/send/s_menu_r2_c2_f2.gif','menus/img/dec/Sans%20titre-14_r2_c2_f3.gif')">
    <?php include("menu1.php"); ?>

    
<div class="container mt-3"> 
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
         &nbsp; &nbsp; &nbsp; &nbsp; 
    &nbsp;
             <a href="mail.php?nav=0" target="_top" onClick="MM_nbGroup('down','group1','s_menu_r2_c2','menus/img/mail/send/VVVV2.png',1)" onMouseOver="MM_nbGroup('over','s_menu_r2_c2','menus/img/mail/send/VVVV2.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="s_menu_r2_c2" src="menus/img/mail/send/VVVV1.png" border="0" alt="" onLoad=""></a>
            
            
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
         
              <a href="mail.php?nav=1" target="_top" onClick="MM_nbGroup('down','group1','s_menu_r2_c22','menus/img/mail/send/WWWW2.png',1)" onMouseOver="MM_nbGroup('over','s_menu_r2_c22','menus/img/mail/send/WWWW2.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="s_menu_r2_c22" src="menus/img/mail/send/WWWW1.png" border="0" alt="" onLoad=""></a>
            <br>
          </div>
    <div class="container mt-3">
<div align="center">
    <table  height="555" Width="666"  border="1" dwcopytype="CopyTableColumn">
     
        <td width="388" bgcolor="#FFFFFF"> 
          <center>
<?php 

   
 if (isset($_GET['nav'])) choice();
              else 
              {
                           $connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
		
			$req='select nlm,ncm from utilisateur where login="'.$_SESSION['user']['login'].'"';
//	    $resultat=mysql_query($req);
             $resultat=mysqli_query($connexion,$req);
		$var=mysqli_fetch_array($resultat);
		$msg=$var[1]-$var[0];
		if ($var[0]<$var[1])
		print '<h3><div class="alert alert-success">Vous avez :  '.$msg.' Nouveaux Messages  </div>';
		else 
		print '<h3><div class="alert alert-danger">
        Vous n\'avez pas de Nouveaux Messages </div>';
              }

			?>
   </center></td>
      
    </table>
         
  </div>
 </div>
</body>
</html>
