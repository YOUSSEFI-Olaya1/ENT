<?php 
session_start();

if (!isset($_SESSION['user']))
  header("location:err.htm");
 ?>
<html>
<head>
<title>Mettre un Fichiers Dans Le serveur</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript"  src="menus/script.js"type="text/JavaScript"></script>
    
          <style>
    .rrr{
    background-color: #D9DDDC;
    border: none;
    color: #008000;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16x;
    margin: 4px 2px;
    cursor: pointer
}
.rrrr{
    background-color: #008000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16x;
    margin: 4px 2px;
    cursor: pointer
}
              .r{
    background-color: gainsboro;
    border: none;
    color: #0033FF;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16x;
    margin: 4px 2px;
    cursor: pointer
}
            </style>
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
     <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mettre un fichier </h2>
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
              <table>
		<?php
		  if (!isset($_GET['upload']))
		  { 
  print'      <td width="888" height="222" bgcolor="#B3E5FC" >
		 <form action="" method="get" name="nbrfrm">
            <div align="left"><font color="#0033FF"><strong> <br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Génération automatique:</strong></font> 
              <select name="nbr" >';
                
			  for ($i=1;$i<10;$i++) 
			  print'<option value="'.$i.'">'.$i.'</option>';
			  
     print'         </select>
              <input type="submit" name="Submit" value="Envoyer">
            </div>
          </form>
		  <hr>
          <form action="upload.php?upload=yes" enctype="multipart/form-data" method="post">
            <table width="100%" border="0">
              <tr> 
                <td> <center>
                    <p> 
                      <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                      <font color="#0033FF"><strong>Fichier à Mettre:</strong></font> 
                      <input type="file" name="fileupload">
                    </p>
                  </center></td>
              </tr>';
            
			 if (isset($_GET['nbr']))
			 
			 for ($i=1;$i<$_GET['nbr'];$i++)
			 {
			 
		 print'<tr><td><center>';
			 
			
             
            // print'<input type="hidden" name="MAX_FILE_SIZE" value="10485760">';
           print'<font color="#0033FF"><strong> <br><br>
           
           Fichier à Mettre: </strong></font>';
             print'<input type="file" name="fileupload'.$i.'"> ';
             
           
			 
	     print'</center></td></tr>';
			 }
		 
			  
    print'          <tr> 
                <td><center>
                <br><br><br>
                    <input name="submit" type="submit" class="r" value="Mettre">
                  </center></td>
              </tr>
            </table>
          </form></td>';
		  
		  	}//fin if
else
{			

 print' </td>
   <td width="777" bgcolor="#7facd6" > <center>
   <table border="1" cellpadding="6" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="table">';

              
//$file_dir ='C:\Program Files\EasyPHP1-7\users\\'.$_SESSION['user'] ;
    $file_dir ='C:/wamp64/users/'.$_SESSION['user']['login'] ;
   
$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
	
 foreach($_FILES as $file => $file_array) {
 $req='select * from files where f_name="'.$file_array['name'].'" and login="'.$_SESSION['user']['login'].'"';
 mysqli_query($connexion,$req);
    
 if (mysqli_affected_rows($connexion)) 
 {
      print '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>';
 print '<strong><font color="#FF0000">'.$file_array['name'].'</font>, <font color="#FF0000">existe déjà</font> </strong><br>';
  print '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>';   
 }
 else if ($file_array['size']!=0)
 { if ($file_array['name']!="") 
 {
 
 print '<tr><td>';
  
     print '<font color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nom</font>:'.$file_array['name']."<br>\n";
     print '<font color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type</font>:'.$file_array['type']."<br>\n";
     print '<font color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taille</font>:'.$file_array['size']."Octes<br>\n";
 
     if (is_uploaded_file($file_array['tmp_name'])) 
	 {
        move_uploaded_file($file_array['tmp_name'],
             "$file_dir/$file_array[name]") or die ("Impossible de copié");
			 
         print '<font color="#663366">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fichier copi&eacute;!</font> <br><br>';
	
$req='insert into files(f_name,login) values ("'.$file_array['name'].'","'.$_SESSION['user']['login'].'")';
//mysql_query($req) or die(mysql_error());
mysqli_query($connexion,$req) or die(mysqli_error($req)); 
         
}	 
 print '</td></tr>';
} 
 }else if($file_array['name']!="") print '<strong> <font color="#FF0000">'.$file_array['name'].'</font> > 2 Mo </strong><br>';
 
 						}
// mysql_close();
  
 print'           </table>
            <p ><br><br>Vous pouvez maintenant<a href="partage_file.php"> partager</a> 
              ces fichiers<br><br> <br><br></p>
          </center></td>';
    
    
}
		  ?>
      </tr>
    </table>
    <p><br><br>NB: <font color="#FF0000">Attention Maximum 2 Mo</font></p>
  </div>
</div>
</div>
</body>
</html>