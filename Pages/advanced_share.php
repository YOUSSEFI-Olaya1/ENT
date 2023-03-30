
<?php 

session_start();
if (!isset($_SESSION["user"]))
  header("location:err.htm");
  ?>
  
<html>
<head>
<title>Partage Avenc&eacute;</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../design.css">
    
    
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript"><!-- Hide from old browsers
function stat(txt) {
window.status = txt;
setTimeout("erase()", 5000);
}
function erase () {
window.status = "";
}
var i = 0;
var TextNumber = 0;
var TextInput = new Object();
var HelpText = "";
var Text = "";
var Speed = 106
var WaitSpace = " "
TextInput[0] = " Vous Pouvez Ici.... "
TextInput[1] = " Partager plusieurs ......."
TextInput[2] = " fichiers.... "
TextInput[3] = " en même temps...."
TextInput[4] = "merci de comprendre....." 
TextInput[5] = " !!!!!!!!!!"
TextInput[6] = " .............."

TotalTextInput = 6;
for(var j = 0; j < TotalTextInput; j++) {
TextInput[j] += WaitSpace
}
var TimerId
var TimerSet = false;
function startBanner() {
TimerSet = !TimerSet
if(TimerSet)
banner();
else
kill();
}
function banner() {
Text = rollMessage();
TimerId = setTimeout("banner()", Speed)
document.IMAWin.TextArea.value = Text; 
}
function rollMessage() {
Wait_yn = false;
i++;
var CheckSpace = HelpText.substring(i-1, i);
CheckSpace = "" + CheckSpace;
if(CheckSpace == " ") { i++; }
if(i >= HelpText.length+1) {
i = 0; 
if (TextNumber < TotalTextInput) {
TextNumber++;
} else {
TextNumber = 0;
}
init();
}
Text = HelpText.substring(0, i);
return (Text);
}
function init() {
Text = TextInput[TextNumber]
HelpText = Text;
}
function kill() {
clearTimeout(TimerId)
}
// -->
</script>
</head>

<body bgcolor="white" onload="init() ; startBanner()">
<div align="center">
<center>
    <p>&nbsp;</p>
    <p>
	<form name="IMAWin">
      <input   readonly=""   type="text" size="40" name="TextArea" wrap="VIRTUAL">
	  </form>
    </p>
  </center></div>
  <p>&nbsp;</p>
  

<p>&nbsp;</p>
  
<form action="add_partage.php?win=yes"  method="post">
  <div align="center">
    <table width="51%" border="1" cellpadding="6" cellspacing="0" bordercolor="#CC6600">
      <tr> 
        <td width="54%" height="32"> <font face="Geneva, Arial, Helvetica, sans-serif"><em><strong> 
          <?php 
            
            
$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
            
            
$req='select id_file,f_name from files where login="'.$_SESSION['user']['login'].'"';



$resultat=mysqli_query($connexion,$req) or die(mysqli_error($req));
            
while ($var=mysqli_fetch_array($resultat))
{

print '<input name='.$var[0].' type=checkbox value='.$var[0].'> '.$var[1].'<br>';

}
?>
          </strong></em></font></td>
        <td  valign="top"  width="46%"><input type="submit" value="Partager"> 
          <strong><font face="Arial, Helvetica, sans-serif">A:</font></strong> 
          <select name="lov_u">
            <?php 

$req='select login from utilisateur where login <>"'.$_SESSION['user']['login'].'"';


$resultat=mysqli_query($connexion,$req);

while ($var=mysqli_fetch_array($resultat))
{

         print '<option  value="'.$var[0].'">'.$var[0].'</option>';

}
//mysql_close();
	  ?>
          </select> </td>
      </tr>
    </table>
  </div>
</form>
<div align="center">
  <p>
  <?php 
if (!empty($_GET['err_msg']))
  
  print '<center><strong><font color="#FF0000">'.$_GET['err_msg'].'</font></strong></center>';
  ?>
  </p>
 <p>
  <input type="button" value=" Close" onClick="self.close()" class="rrr ">
</p>
</div>
</body>
</html>
