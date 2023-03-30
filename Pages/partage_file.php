
<?php 

session_start();

if (!isset($_SESSION["user"]))
  header("location:err.htm");
  ?>
<html>
<head>
<title>Partage de Fichiers</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript"  src="menus/script.js"type="text/JavaScript"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../design.css">
    
    <link rel="stylesheet" href="..//icons-1.8.1/font/bootstrap-icons.css">
    
    

<link href="menus/style.css" rel="stylesheet" type="text/css">
</head>

    
<body onLoad="MM_preloadImages('menus/img/acc/Sans%20titre-14_r2_c2_f3.gif','menus/img/acc/Sans%20titre-14_r2_c2_f2.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f3.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f2.gif','menus/img/mes_f/consult/s_menu_r2_c2_f3.gif','menus/img/mes_f/consult/s_menu_r2_c2_f2.gif','menus/img/mes_f/partager/s_menu_r2_c2_f3.gif','menus/img/mes_f/partager/s_menu_r2_c2_f2.gif','menus/img/mes_f/upload/s_menu_r2_c2_f3.gif','menus/img/mes_f/upload/s_menu_r2_c2_f2.gif','menus/img/mail/Sans%20titre-14_r2_c2_f3.gif','menus/img/mail/Sans%20titre-14_r2_c2_f2.gif','menus/img/dec/Sans%20titre-14_r2_c2_f3.gif','menus/img/dec/Sans%20titre-14_r2_c2_f2.gif')">

  
 <?php include("menu.php"); ?>
<!--
    <br>
    <br>
    <br>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consulter les partages </h3>
-->
    <BR>
        <BR>
     <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Partager mes fichiers </h2>
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
        <table >
        
      <td width="999" height="88" bgcolor="#FFFFFF" > 
        <?php 
$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");




print'<center>';
              
$requete='select f.f_name,p.login,p.id_partage from files f,partage p,utilisateur u where p.id_file=f.id_file and f.login=u.login and u.login="'.$_SESSION['user']['login'].'"';
$resultat=mysqli_query($connexion,$requete) or die (mysql_error());
if (mysqli_affected_rows($connexion))
{
print '<form name="form0" method="post" action="Add_partage.php">';
print '<table border="1" cellpadding="4" cellspacing="0" bordercolor="#6666CC" class="table">';
print '<tr bgcolor="#7facd6"> <td align="center"><font color="#000000">Ficheir</font></td><td align="center" colspan="2"><font color="#00000">Utilisateur</font></td></tr>';
while ($var=mysqli_fetch_array($resultat))
{
print '<tr bgcolor="#FFFFFF"><td>'.$var[0].'</td><td>'.$var[1].'</td><td width="1%"><input name="'.$var[2].'" type="checkbox" value="'.$var[2].'"></td></tr>';
}

    

print '<tr><td colspan="2"><input  name="type_share" type="hidden" value="no_share"></td><td><input name="send" type="submit" value="Départager" class="rr "></td></tr>';
print '</table>';
print'</form>';
}
else
{
print' <strong><font color="#FF0000"><em><h3>!!!Vous n’avez partagé aucun fichier</h3></em></font></strong>';
}
print '</center>';
//mysql_close();
?>
      </td>
    </tr>
    <tr> 
      <td width="555" bgcolor="#B3E5FC" >
	  <?php  
              error_reporting(0);
$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");	  
$req='select id_file,f_name from files where login="'.$_SESSION['user']['login'].'"';
$resultat=mysqli_query($connexion,$req) or die(mysqli_error($req));
         
if (mysqli_affected_rows($connexion))
{	  
	  
print'<form name="form" method="post" action="Add_partage.php">';
          
		  if (!empty($_GET['err_msg'])) 
	  print '<center><strong><font color="#FF0000">'.$_GET['err_msg'].'</font></strong></center><br>';
	 
   print'       <font color="#0033FF" size="2"><strong><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Partager:</strong></font> 
          <input  name="type_share" type="hidden" value="share">
          <font color="#0000FF" size="3"><strong>:</strong></font> 
          <select name="lov_f">';
           
$req='select id_file,f_name from files where login="'.$_SESSION['user']['login'].'"';


$resultat=mysqli_query($connexion,$req) or die(mysqli_error($req));
while ($var=mysqli_fetch_array($resultat))
{

         print '<option  value="'.$var[0].'">'.$var[1].'</option>';

}


  print'    </select>
          <font color="#0033FF" size="2"> <strong>à :</strong></font> ';
            

$req='select login from utilisateur where login <>"'.$_SESSION['user']['login'].'"';


$resultat=mysqli_query($connexion,$req);
if (mysqli_affected_rows($connexion))
{
    
   print'       <select name="lov_u">';
while ($var=mysqli_fetch_array($resultat))
{

         print '<option  value="'.$var[0].'">'.$var[0].'</option>';

}

	 
   print'       </select>';
   

print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

 print'  <input type="submit" name="Submit" value="Partager" class="rrr ">';
 }//end if
 else print'<strong><font color="#FF0000"><em>Il n’y a Aucun utilisateur</em></font></strong>';

  print'      </form>';
if (mysqli_affected_rows($connexion))   print' <p><br><br><a href="advanced_share.php" target="_blank">Partage Avancé;</a></p></td> ';
}//end if
else
{
print' <marquee><strong><font color="#FF0000"><em>Vous devez au moins placer un fichier pour pouvoir le partager</em></font></strong></marquee>';
}		
		?>
    </tr>
  </table>
  
</div>
        </div>
</body>
</html>
