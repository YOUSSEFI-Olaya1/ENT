<?php 
session_start();

if (!isset($_SESSION["user"]))
  header("location:err.htm");
$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");

function sec_verif($file)
 {
    $connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
 if (!isset($_GET['own']))
 {
 $req='select * from partage where id_file="'.$file.'" and login="'.$_SESSION['user']['login'].'"';
// mysql_query($req)or die(mysql_error());
 mysqli_query($connexion,$req) or die(mysqli_error($req));
}
else if ($_GET['own']=="yes")

{

 $req='select * from files where id_file="'.$file.'" and login="'.$_SESSION['user']['login'].'"';
// mysql_query($req)or die(mysql_error());
mysqli_query($connexion,$req) or die(mysqli_error($req));
}
 
 
 
  if (!mysqli_affected_rows($connexion)) header("location:err.htm");
 
 
 }
 
 
 



sec_verif($_GET['idf']);
  
// $file_path ='C:\Program Files\EasyPHP1-7\users\\'.$_GET['path'].'\\'.$_GET['f_name'];
$file_path ='C:/wamp64/users/'.$_GET['path'].'/'.$_GET['f_name'];

header("Content-Type: application/octet-stream");
header("Content-Length: ".filesize($file_path));
header("Content-Disposition: attachment; filename=".basename($file_path));
readfile($file_path);




















?>