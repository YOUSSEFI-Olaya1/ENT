<?php 
session_start();
if (!isset($_SESSION["user"]))
  header("location:err.htm");//accee membres

 function sec_verif($file)
 {
         $connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
 $req='select id_file,login from files where id_file="'.$file.'" and login="'.$_SESSION['user']['login'].'"';
// mysql_query($req)or die(mysql_error());
 

      mysqli_query($connexion,$req) or die(mysqli_error($req));  
 if (!mysqli_affected_rows($connexion)) header("location:err.htm");
// mysqli_query($connexion,$req) or die(mysqli_error($req));    
//if (mysqli_affected_rows($connexion))
 }
 function partager($user,$file)
 {
         $connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
 $req='select login,id_file from partage where login="'.$user.'" and id_file="'.$file.'"';
mysqli_query($connexion,$req);
$err=false;
if (mysqli_affected_rows($connexion))
 {
 $err=true;
 }
   else
   {  
      $req='insert into partage (id_file,login,date) values ("'.$file.'","'.$user.'","'.date('Y-m-d').'")';

      $resultat=mysqli_query($connexion,$req) ; 
   }
 return $err;
 }
$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");

 $err_msg="";
if (@$_POST['type_share']=="share")
{
sec_verif($_POST['lov_f']);
if(partager($_POST['lov_u'],$_POST['lov_f'])) $err_msg="Il ya déjà ce partage";

}
else if (@$_POST['type_share']=="no_share") 
{
sec_verif($_POST['lov_f']);   
 
   foreach($_POST as $var)
   {
   
   if ($var!="no_share"&&$var!="Départager")
     {  
	    $req='delete from partage where  id_partage="'.$var.'"';
        $resultat= mysqli_query($connexion,$req);
     }
   }
   
}
if (!isset($_GET['win']))  header("location:partage_file.php?err_msg=$err_msg");
else 
{
foreach($_POST as $vars)

{
	if ($_POST['lov_u']!=$vars)
	{
	sec_verif($vars);
if (partager($_POST['lov_u'],$vars)) $err_msg="Un de Ces Partages Existe";
    }

}
header("location:advanced_share.php?err_msg=$err_msg");
}

 ?>



