<?php 

session_start();
//
if (!isset($_SESSION["user"]))
  header("location:err.htm");
  ?>
<html>
<head>
<title>Consult&eacute; Les Partages</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    
    
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../design.css">
    
    <link rel="stylesheet" href="..//icons-1.8.1/font/bootstrap-icons.css">
    
    
<script language="JavaScript"  src="menus/script.js"type="text/JavaScript"></script>
<link href="menus/style.css" rel="stylesheet" type="text/css">
</head>

<body  onLoad="MM_preloadImages('menus/img/acc/Sans%20titre-14_r2_c2_f3.gif','menus/img/acc/Sans%20titre-14_r2_c2_f2.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f3.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f2.gif','menus/img/mes_f/consult/s_menu_r2_c2_f3.gif','menus/img/mes_f/consult/s_menu_r2_c2_f2.gif','menus/img/mes_f/partager/s_menu_r2_c2_f3.gif','menus/img/mes_f/partager/s_menu_r2_c2_f2.gif','menus/img/mes_f/upload/s_menu_r2_c2_f3.gif','menus/img/mes_f/upload/s_menu_r2_c2_f2.gif','menus/img/mail/Sans%20titre-14_r2_c2_f3.gif','menus/img/mail/Sans%20titre-14_r2_c2_f2.gif','menus/img/dec/Sans%20titre-14_r2_c2_f3.gif','menus/img/dec/Sans%20titre-14_r2_c2_f2.gif')">

  <?php include("menu.php"); ?>
<!--
    <br>
    <br>
    <br>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consulter les partages </h3>
-->
    <BR>
        <BR>
     <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consulter les partages </h2>
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
            

      <td width="328" valign="top" > <p>&nbsp; </p>
        <div class="container mt-3">
              <table class="table table-hover">
    <tr> 
     
      <td width="377" > 
          <?php 

$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
print'<center>';



$requete='select f.f_name,u.login,f.id_file from files f,partage p,utilisateur u where p.id_file=f.id_file and f.login=u.login and p.login="'.$_SESSION['user']['login'].'"';
//$resultat=mysql_query($requete) or die (mysql_error());
$resultat=mysqli_query($connexion,$requete) or die(mysqli_error($requete));
if (mysqli_affected_rows($connexion))
{
print '<table border="1" cellpadding="6" cellspacing="0" bordercolor="#FFFFFF" bgcolor="FFFFFF" class="table">';
print '<tr bgcolor="#7facd6"> <td align="center"><font color="#000000"><h3>fichier</h3></font></td><td><h3>Utilisateur</h3></td></tr>';
while ($var=mysqli_fetch_array($resultat))
{
print '<tr><td><h4><a href="download.php?idf='.$var[2].'&path='.$var[1].'&f_name='.$var[0].'">'.$var[0].'</a></h4></td><td><h4>'.$var[1].'</h4></td></tr>';
}


print '</table>';
print '</center>';
}else
print '<strong><font color="#FF0000"><em><h1>!!!Vous n \'avez aucun Fichier Partagé</h1></em></font> </strong>';
//mysql_close();
?>
      </td>
    </tr>
  </table>
        </div></td>
 

</body>
</html>
