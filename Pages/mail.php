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
            </style>

</head>

<body  onLoad="MM_preloadImages('menus/img/dec/Sans%20titre-14_r2_c2_f2.gif','menus/img/acc/Sans%20titre-14_r2_c2_f3.gif','menus/img/acc/Sans%20titre-14_r2_c2_f2.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f3.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f2.gif','menus/img/mail/Sans%20titre-14_r2_c2_f3.gif','menus/img/mail/Sans%20titre-14_r2_c2_f2.gif','menus/img/mail/read/s_menu_r2_c2_f3.gif','menus/img/mail/read/s_menu_r2_c2_f2.gif','menus/img/mail/send/s_menu_r2_c2_f3.gif','menus/img/mail/send/s_menu_r2_c2_f2.gif','menus/img/dec/Sans%20titre-14_r2_c2_f3.gif')">
   

<div class="container mt-3"> 
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
         &nbsp; &nbsp; &nbsp; &nbsp; 
    &nbsp;
             <a href="mail.php?nav=0" target="_top" onClick="MM_nbGroup('down','group1','s_menu_r2_c2','menus/img/mail/send/VVVV2.png',1)" onMouseOver="MM_nbGroup('over','s_menu_r2_c2','menus/img/mail/send/VVVV2.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="s_menu_r2_c2" src="menus/img/mail/send/VVVV1.png" border="0" alt="" onLoad=""></a>
            
            
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
         
              <a href="mail.php?nav=1" target="_top" onClick="MM_nbGroup('down','group1','s_menu_r2_c22','menus/img/mail/send/WWWW2.png',1)" onMouseOver="MM_nbGroup('over','s_menu_r2_c22','menus/img/mail/send/WWWW2.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="s_menu_r2_c22" src="menus/img/mail/send/WWWW1.png" border="0" alt="" onLoad=""></a>
            <br>
          </div>

 
  <div align="center">
    <table  height="555" Width="666"  border="1" dwcopytype="CopyTableColumn">
     
        <td width="388" bgcolor="#FFFFFF"> 
          <center>
            <?php
			
           
function choice()
{	
$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");

	switch($_GET['nav'])
	{	
	case 0:// lire  message
	
	$req='select nlm,ncm from utilisateur where login="'.$_SESSION['user']['login'].'"';
//	    $resultat=mysql_query($req);
             $resultat=mysqli_query($connexion,$req);
		$var=mysqli_fetch_array($resultat);
	$req='update utilisateur set nlm="'.$var[1].'" where login="'.$_SESSION['user']['login'].'"';	
		$resultat=mysqli_query($connexion,$req);
		
	$req='select login,subject,date,id_msg from mail where l_dest="'.$_SESSION['user']['login'].'"';
	    $resultat=mysqli_query($connexion,$req);
if (mysqli_affected_rows($connexion))
{		 print '<form name="form" method="post" action="mail.php?nav=4" >';	
         print '<table cellpadding="4" cellspacing="0" bordercolor="#6666CC" class="table" border="4" >';
         print '<tr><td>De</td><td>Sujet</td><td>date</td><td></td></tr>';
  while ($var=mysqli_fetch_array($resultat))
  {
print '<tr><td><strong><a href="mail.php?nav=3&id='.$var[3].'">'.$var[0].'</a></strong></td><td><em>'.$var[1].'</em></td><td>'.$var[2].'</td>';
print'<td width="6%"><input name="'.$var[3].'" type="checkbox" value="'.$var[3].'"></td></tr>';
  }
print '<tr><td colspan="3" align="right"><input name="send" type="submit"  value="Supprimer" class="rrr"></td></tr>';
		 print '</table>';
		 print'</form>';
 
}else 
print '<h2><div class="alert alert-danger">vous n\'avez Aucun Message!!!!</div></h2>';	
	break;
	case 1://ecrire msg
		
		
$req='select login from utilisateur where login <> "'.$_SESSION['user']['login'].'"';
 $resultat=mysqli_query($connexion,$req);
if (mysqli_affected_rows($connexion))
{
	
print  '<form method="post" action="mail.php?nav=2" >';
         	print  '<table width="50%" height="333" border="0">';
            	print  '<tr> ';
             
  print  '<td><font color="#008000"><strong>À :</strong></font></td>'; 
    
	print  ' <td>';
           
print' <select name="lov_u">';


while ($var=mysqli_fetch_array($resultat))
{

         print '<option  value="'.$var[0].'">'.$var[0].'</option>';

}

	 
         	print  '</select> </td>';
           	print  '</tr>';
             	print  '<tr>'; 
    print  '<br><br>'; 
              	print  '    <td height="24"><font color="#008000"><strong><br> Sujet:</strong></font></td>';
               	print  '   <td><input name="subject" type="text" id="subject" ></td>';
             	print  '   </tr><tr><td colspan="2"><font color="#008000"><strong><br>Text:</strong></font></td> </tr><tr> ';
                
                 
                  
               
      	print  '<td colspan="2"><strong> </strong> <textarea name="data" cols=40 rows=8 wrap=virtual id="data"></textarea></td>';
    	print  '</tr> <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Envoyer" class="rrr"></td>';
        print  '</tr></table> <P align="left"> ';       
      	print  '</p></form>';
		}else print'<strong><font color="#FF0000">Aucun Utilisateur Inscrit  </font></strong>';
			
			break;
			
			case 2:
			 if ( isset($_POST['lov_u'])&&isset($_POST['subject'])&&isset($_POST['data']) )
			  {
			  
$req='insert into mail (login,l_dest,subject,data,date) values ("'.$_SESSION['user']['login'].'","'.$_POST['lov_u'].'","'.$_POST['subject'].'","'.$_POST['data'].'","'.date('Y-m-d').'")';

//      $resultat=mysql_query($req)or die(mysql_error()); 
	  $resultat=mysqli_query($connexion,$req) or die(mysqli_error($connexion));
                  
	  $req='select ncm from utilisateur where login="'.$_POST['lov_u'].'"';
	  $resultat=mysqli_query($connexion,$req); 
	  $var=mysqli_fetch_array($resultat);
	  $var[0]+=1;
$req='update utilisateur set ncm="'.$var[0].'" where login="'.$_POST['lov_u'].'"';
	  $resultat=mysqli_query($connexion,$req); 		  
			 }
			print '<h2><div class="alert alert-success">le Message a été envoyé</div></h2>';
			break;
			case 3:
			
$req='select login,subject,data from mail where id_msg="'. $_GET['id'].'" and l_dest="'.$_SESSION['user']['login'].'"';
	    $resultat=mysqli_query($connexion,$req);
$var=mysqli_fetch_array($resultat);

    print '<table class="table table-hover" cellpadding="4" cellspacing="0" bordercolor="#6666CC" border="1">';
	
    print '<tr><td>De:</td> ';
	print'<td bgcolor="#B2DFDB" >'.$var[0].'</td>';
    print '</tr><tr><td >Sujet</td>  ';
    print '<td bgcolor="#B2DFDB">'.$var[1].'</td>';
    print '</tr><tr><td colspan="2"><p>text:</p></td></tr><tr bgcolor="#B2DFDB">';
    print ' <td width=50% colspan="2">'.$var[2].'</td></tr>';    
	 
    print '</table>';
			
			
			break;
	    case 4:
		
		  function sec_verif($mail)
 {
 $connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
 $req='select * from mail where id_msg="'.$mail.'" and l_dest="'.$_SESSION['user']['login'].'"';
//mysql_query($req)or die(mysql_error());
//mysqli_query($connexion,$req) or die(mysqli_error($req));
 mysqli_query($connexion,$req) or die(mysqli_error($req));
 
 
  if (!mysqli_affected_rows($connexion)) header("location:err.htm");
 
 
 }
		foreach($_POST as $vars)
   {
   
   if ($vars!="Supprimer")
     {  
        

	 sec_verif($vars);
	    $req='delete from mail where  id_msg="'.$vars.'"';
        $resultat=mysqli_query($connexion,$req);
     }
   
   }
		
		header("location:mail.php?nav=0");
		
		break;
			
			}//end switch
 }//end function      
 if (isset($_GET['nav'])) choice();
           
			?>
          </center></td>
      </tr>
    </table>
     <a  style="text-decoration:none; " href="mail1.php">
                      <div style="margin: 30px;">
                         
                     <button class="rrrr" >Retour</button>
                      
                          </div>
                      </a>
  </div>
</div>
</body>
</html>
