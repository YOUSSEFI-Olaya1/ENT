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
        .cc{
            
background-color: white;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1%;
            margin-bottom: auto;
            height: 500px;
            justify-content: center;
            width: 1100px;
            display: flex;
            align-items: center;
            text-align: center
        }
         .a{
             color: red;
       margin-top:3%;
            background-color:white;
              margin-left: 36%;
              margin-right:36%;

        }
    </style>

</head>

<body  onLoad="MM_preloadImages('menus/img/dec/Sans%20titre-14_r2_c2_f2.gif','menus/img/acc/Sans%20titre-14_r2_c2_f3.gif','menus/img/acc/Sans%20titre-14_r2_c2_f2.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f3.gif','menus/img/mes_f/Sans%20titre-14_r2_c2_f2.gif','menus/img/mail/Sans%20titre-14_r2_c2_f3.gif','menus/img/mail/Sans%20titre-14_r2_c2_f2.gif','menus/img/mail/read/s_menu_r2_c2_f3.gif','menus/img/mail/read/s_menu_r2_c2_f2.gif','menus/img/mail/send/s_menu_r2_c2_f3.gif','menus/img/mail/send/s_menu_r2_c2_f2.gif','menus/img/dec/Sans%20titre-14_r2_c2_f3.gif')">
    <?php include("menu4.php"); ?>

    <div class="container mt-3"> 
        <div class="a">  <!--
            	<a style="text-decoration: none;" class="nav-link" href="modifierUtilisataur1.php?idUser=<?php echo $_SESSION['user']['iduser'] ?>">
                    <i class="fa fa-user-circle-o"></i>
                    <div class="brand-name">
                     <h3 style="color: white;">
                    &nbsp;
                         &nbsp;
					<?php echo  ' '.$_SESSION['user']['login']?> 
                        </h3>
                     </div>
                    
				</a> 
-->
<!--     <i class="fa fa-user-circle-o"></i>-->
                   
                     <h3 class="aa"style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;
                        Bienvenue :
					<?php echo  ' '.$_SESSION['user']['login']?> 
                        </h3>
     <?php
                     $connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion,"ent");
		
			$req='select nlm,ncm from utilisateur where login="'.$_SESSION['user']['login'].'"';
//	    $resultat=mysql_query($req);
             $resultat=mysqli_query($connexion,$req);
		$var=mysqli_fetch_array($resultat);
		$msg=$var[1]-$var[0];
		if ($var[0]<$var[1])
		print '<h5><div class="alert alert-success"><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vous avez : <font > '.$msg.'</font> Nouveaux Messages </font ></div ></h5>';
		
    ?>
             </div>

    
     <div class="cc">
         
         

         <div><?php if ($_SESSION['user']['role']=='ADMIN') {?>
             <a style="text-decoration: none;" href="../../test.net/SITE1.php"><div></div><h3 style="color:black"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site 1</h3></a> <?php } ?> </div> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        
        
        <div><a style="text-decoration: none;" href="../../test.net/SITE2.php"><div></div> &nbsp;<h3 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site 2</h3></a></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        
        <div> <a style="text-decoration: none;" href="../../test.net/SITE3.php"><div></div> &nbsp;<h3 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site 3</h3></a></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        
        <div> <a style="text-decoration: none;" href="../../test.net/SITE4.php"><div></div> &nbsp;<h3 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site 4</h3></a></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
         
        <div><a style="text-decoration: none;" href="../../test.net/SITE5.php"><div></div> &nbsp;<h3 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site 5</h3></a></div>
 </div>
    
     </div>
</body>
</html>