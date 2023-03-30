
<?php 
    require_once("connexionBD.php");
    require_once('identifier.php');
//    $count="select count(*) countp from clients";
//    $resultatcount=$pdo->query($count);
//    $tabcount=$resultatcount->fetch();
//    $nbrclients=$tabcount['countp'];
//
//    $count="select count(*) countp from devis";
//    $resultatcount=$pdo->query($count);
//    $tabcount=$resultatcount->fetch();
//    $nbrdevis=$tabcount['countp'];
//
//    $count="select count(*) countp from projets";
//    $resultatcount=$pdo->query($count);
//    $tabcount=$resultatcount->fetch();
//    $nbrprojet=$tabcount['countp'];

    $requeteCount="select count(*) countUser from utilisateur";
    $resultatCount=$pdo->query($requeteCount);
    $tabCount=$resultatCount->fetch();
    $nbrUser=$tabCount['countUser'];


//    $requeteFacture="select idfacture, nomprojets,nom ,montant,  datefacture from factures f,devis d ,clients c,projets p where d.iddevis=f.iddevis and p.idprojets=f.idprojets and f.idclients=c.idclients";
//    $resultatFacture=$pdo->query($requeteFacture);
//    


    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
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
            
        }
        .ccc{
            

             margin-left:85%;
           background-color:#7facd6;
             margin-top:0%;
            height: 120px;
        }
        .c{
        margin-left: auto;
            margin-right:auto;
            height: 120px;
            background-color:#7facd6;
        }
        .a{
       margin-top:1%;
            background-color:white;
              margin-left: 36%;
              margin-right:36%;

        }
       
    </style>
    <title>Tableau De Bord</title>
</head>

<body >
 <?php include("menu3.php"); ?>
    
         <br>
       
        
        
        
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
                   
                     <h3 class="aa"style="color:black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

    
  
    </div>
    
    

 
    <div class="cc">

<!--
     <?php if ($_SESSION['user']['role']=='ADMIN') {?>
            <li><img src="../images/uti1.png" alt="">&nbsp;<a style="text-decoration: none;" href="utilisateurs.php"><span>Utilisateurs</span></a> </li>
             <?php } ?> 
        
-->
         <div><?php if ($_SESSION['user']['role']=='ADMIN') {?>
             <a style="text-decoration: none;" href="utilisateurs.php"><div><img class="mb-4" src="../images/wxc.jpg"  width="200" height="200" ;></div><h3 style="color:black"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Utilisateurs</h3></a> <?php } ?> </div> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        
        
        <div><a style="text-decoration: none;" href="Partage.php"><div><img class="mb-4" src="../images/pp.png"  width="200" height="200" ;></div> &nbsp;<h3 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Partage</h3></a></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        
        <div> <a style="text-decoration: none;" href="mail1.php"><div><img class="mb-4" src="../images/mm.png"  width="200" height="200" ;></div> &nbsp;<h3 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Messagerie</h3></a></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        
        
        
        
        <div><a style="text-decoration: none;" href="Service.php"><div><img class="mb-4" src="../images/ss.png"  width="200" height="200" ;></div> &nbsp;<h3 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services</h3></a></div>
        
 </div>
       
</body>

</html>