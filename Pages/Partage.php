<?php 
session_start();
//require_once('seConnecter.php');
// if(!session_is_registered('user')) 
if (!isset($_SESSION['user']))
  header("location:err.htm");
  ?>
<html>
<head>
<title>Mes Fichiers</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript"  src="menus/script.js"type="text/JavaScript"></script>
    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../design.css">
    
    <link rel="stylesheet" href="..//icons-1.8.1/font/bootstrap-icons.css">
   

    
<script language="JavaScript" type="text/JavaScript">
function verif()
{
if (confirm("Voulez Vous Vraiment Supprimer Ces Fichiers ??"))
form.submit();
}
</script>
<link href="menus/style.css" rel="stylesheet" type="text/css">
</head>
<body link="#CC6600" vlink="#CCCC33" alink="#FF9900" onLoad="MM_preloadImages('menus/img/acc/Sans%20titre-14_r2_c2_f3.gif','menus/img/acc/Sans%20titre-14_r2_c2_f2.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f3.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f2.gif','menus/img/mes_f/consult/s_menu_r2_c2_f3.gif','menus/img/mes_f/consult/s_menu_r2_c2_f2.gif','menus/img/mes_f/partager/s_menu_r2_c2_f3.gif','menus/img/mes_f/partager/s_menu_r2_c2_f2.gif','menus/img/mes_f/upload/s_menu_r2_c2_f3.gif','menus/img/mes_f/upload/s_menu_r2_c2_f2.gif','menus/img/mail/Sans%20titre-14_r2_c2_f3.gif','menus/img/mail/Sans%20titre-14_r2_c2_f2.gif','menus/img/dec/Sans%20titre-14_r2_c2_f3.gif','menus/img/dec/Sans%20titre-14_r2_c2_f2.gif')">
<!--
<p align="center"><img src="menus/img/my_files.jpg" width="320" height="50"></p>
<p align="center"><img src="menus/img/hr.gif" width="600" height="10"></p>
-->
    
    <?php include("menu.php"); ?>
    <BR>
        <BR>
     <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mes   fichiers</h2>
    <BR>
    <td> <table >
<!--
          <tr> 
            <td><a href="Tableau_de_bord.php" target="_top" onClick="MM_nbGroup('down','group1','Sanstitre14_r2_c2','menus/img/acc/Sans%20titre-14_r2_c2_f3.gif',1)" onMouseOver="MM_nbGroup('over','Sanstitre14_r2_c2','menus/img/acc/Sans%20titre-14_r2_c2_f2.gif','',1)" onMouseOut="MM_nbGroup('out')"><img src="menus/img/acc/Sans%20titre-14_r2_c2.gif" alt="" name="Sanstitre14_r2_c2" width="155" height="28" border="0" onload=""></a></td>
          </tr>
          <tr> 
-->
        
<!--
            <td><a href="Partage.php" target="_top" onClick="MM_nbGroup('down','group1','Sanstitre14_r2_c22','menus/img/mes_f/Sans%20titre-14_r2_c2_f3.gif',1)" onMouseOver="MM_nbGroup('over','Sanstitre14_r2_c22','menus/img/mes_f/Sans%20titre-14_r2_c2_f2.gif','',1)" onMouseOut="MM_nbGroup('out')"><img name="Sanstitre14_r2_c22" src="menus/img/mes_f/Sans%20titre-14_r2_c2.gif" border="0" alt="" onLoad=""></a></td>
          </tr>
-->
          <tr> 
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="consult_share.php" onClick="MM_nbGroup('down','group1','s_menu_r2_c2','menus/img/mes_f/consult/EEE3.png',1)" onMouseOver="MM_nbGroup('over','s_menu_r2_c2','menus/img/mes_f/consult/EEE2.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="s_menu_r2_c2" src="menus/img/mes_f/consult/EEE1.png" border="0" alt="" onLoad=""></a></td>
          </tr>
         
         
          <tr> 
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="partage_file.php" target="_top" onClick="MM_nbGroup('down','group1','s_menu_r2_c22','menus/img/mes_f/consult/AAA3.png',1)" onMouseOver="MM_nbGroup('over','s_menu_r2_c22','menus/img/mes_f/consult/AAA2.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="s_menu_r2_c22" src="menus/img/mes_f/consult/AAA1.png" border="0" alt="" onLoad=""></a></td>
          </tr>
          <tr> 
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="upload.php" target="_top" onClick="MM_nbGroup('down','group1','s_menu_r2_c23','menus/img/mes_f/consult/ZZZ3.png',1)" onMouseOver="MM_nbGroup('over','s_menu_r2_c23','menus/img/mes_f/consult/ZZZ2.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="s_menu_r2_c23" src="menus/img/mes_f/consult/ZZZ1.png" border="0" alt="" onLoad=""></a></td>
          </tr>
<!--
          <tr> 
            <td><a href="mail.php" target="_top" onClick="MM_nbGroup('down','group1','Sanstitre14_r2_c23','menus/img/mail/Sans%20titre-14_r2_c2_f3.gif',1)" onMouseOver="MM_nbGroup('over','Sanstitre14_r2_c23','menus/img/mail/Sans%20titre-14_r2_c2_f2.gif','',1)" onMouseOut="MM_nbGroup('out')"><img name="Sanstitre14_r2_c23" src="menus/img/mail/Sans%20titre-14_r2_c2.gif" border="0" alt="" onload=""></a></td>
          </tr>
          <tr> 
            <td><a href="seDeconnecter.php" target="_top" onClick="MM_nbGroup('down','group1','Sanstitre14_r2_c24','menus/img/dec/Sans%20titre-14_r2_c2_f3.gif',1)" onMouseOver="MM_nbGroup('over','Sanstitre14_r2_c24','menus/img/dec/Sans%20titre-14_r2_c2_f2.gif','',1)" onMouseOut="MM_nbGroup('out')"><img name="Sanstitre14_r2_c24" src="menus/img/dec/Sans%20titre-14_r2_c2.gif" border="0" alt="" onLoad=""></a></td>
          </tr>
-->
        </table>
 <p>&nbsp;</p>
        </td>
              
    
    <div class="container mt-3"> 
    
       
  <table class="table table-hover">
    <tr> 
     
      <td width="377" > 
        <?php 
//$connexion=mysql_connect("localhost","root","");
//mysql_select_db("partage_user");
$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
function sec_verif($file)
 {
 $connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
 $req='select * from files where id_file="'.$file.'" and login="'.$_SESSION['user']['login'].'"';
// mysql_query($req)or die(mysql_error());
mysqli_query($connexion,$req) or die(mysqli_error($req));
 
 
 
  if (!mysqli_affected_rows($connexion)) header("location:err.htm");
 
 
 }
 
if (isset($_GET['nav']))
foreach($_POST as $vars)
   {
   
   if ($vars!="Supprimer")
     {  
	 sec_verif($vars);
	 $req='select f_name from files where  id_file="'.$vars.'"';
	 $resultat=mysqli_query($connexion,$req);
//       mysqli_query($connexion,$req) or die(mysqli_error($req));
 
	 $var=mysqli_fetch_array($resultat);
//	unlink('C:\Program Files\EasyPHP1-7\users\\'.$_SESSION['user'].'\\'.$var[0]);
       unlink('C:/wamp64/users/'.$_SESSION['user']['login'].'/'.$var[0]);
	 

	 $req='delete from partage where  id_file="'.$vars.'"';
        $resultat=mysqli_query($connexion,$req);
		
	    $req='delete from files where  id_file="'.$vars.'"';
        $resultat=mysqli_query($connexion,$req);
     }
   
   }


print'<center>';
$requete='select f_name,id_file from files  where  login="'.$_SESSION['user']['login'].'"';
//$resultat=mysql_query($requete) or die (mysql_error());
 $resultat=mysqli_query($connexion,$requete) or die(mysqli_error($requete));
if (mysqli_affected_rows($connexion))
{
print '<form name="form" method="post" action="Partage.php?nav=yes">';
print '<table border="3" cellpadding="6" cellspacing="0" bordercolor="#FFFFFF" bgcolor=white class="table table-hover">';
print '<tr bgcolor="#7facd6"> <td align="center"><font color="black"><h2>fichiers</h2></font></td><td ></td></tr>';

    
  
    
    
while ($var=mysqli_fetch_array($resultat))
{
print '<tr><td><h4><a href="download.php?own=yes&idf='.$var[1].'&path='.$_SESSION['user']['login'].'&f_name='.$var[0].'">'.$var[0].'</a></h4></td><td width="6%"><input name="'.$var[1].'" type="checkbox" value="'.$var[1].'"></td></tr>';
}

print '<tr bgcolor="#FFFFFF"><td colspan="2" align="right"><h4><input name="send" type="button" onClick="verif()" value="Supprimer" class="rr "></h4></td></tr>';
print '</table>';
print'</form>';
}
else
{
print' <strong><font color="#FF0000"><em>Vous n’avez aucun fichier</em></font></strong>';

}
print '</center>';
//mysql_close();
?>
      </td>
    </tr>
  </table>
</div>
     
</body>
</html>
