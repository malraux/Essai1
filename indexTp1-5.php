<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Les renseignements d'un artiste</title>
    <meta name="description" content="">
	<link rel="stylesheet" href="">
  </head>
<body>
<?php
$dsn='mysql:host=localhost;dbname=cinema';
$utilisateur='root';
$motdepasse='';
$ok=true;

try{
	$bd=new PDO($dsn,$utilisateur,$motdepasse);
}
catch(PDOException $e){
	$ok=false;
}
if($ok)
	{echo "connexion réussie !!". "<br/>";}
else
	{echo "erreur de connexion à la base de données !!";
	 die;}
$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$num=20;
//$sql="select * from artiste where id= ". $num;
$sql="select * from artiste";

try
{
	$req=$bd->query($sql);
	$nbligne=$req->rowCount();
        switch ($nbligne) {
        case 0:
          echo "Il n'y a pas de résultats correspondants à vos critéres";
          break;
        case 1:
          echo "L'artiste numéro " . $num . " est :";
	  $lartiste=$req->fetch(PDO::FETCH_OBJ);
	  echo $lartiste->prenom. " ";
	  echo $lartiste->nom;
	  echo "</br>";
	  echo 'Son année de naissance est : ' . $lartiste->anneeNaiss . '</br>';
          break;
        default:
           echo '<h2>Il y a ' . $nbligne . ' artistes dans la table Artiste'. '</h2>';
	   $leslignes=$req->fetchAll(PDO::FETCH_ASSOC);
	   foreach ($leslignes as $uneligne)
	   {echo $uneligne['prenom'] . ' ';
	   echo $uneligne['nom'];
	   echo "</br>";}
           break;
         }
}       
        /*
	if($nbligne==0){ echo "pas pr�sent";}
	else{
	if($nbligne==1){ 
	echo "L'artiste num�ro 20 est :". "<br/>";
	$lartiste=$req->fetch(PDO::FETCH_OBJ);
	echo $lartiste->prenom. " ";
	echo $lartiste->nom;
	echo "</br>";
	echo 'Son ann�e de naissance est : ' . $lartiste->anneeNaiss . '</br>';}
	else{
	   $req=$bd->query($sql);
	   $nblignes = $req->rowCount();
	   echo '<h2>Il y a ' . $nblignes . ' artistes dans la table Artiste'. '</h2>';
	   $leslignes=$req->fetchAll(PDO::FETCH_ASSOC);
	   foreach ($leslignes as $uneligne)
	   {echo $uneligne['prenom'] . ' ';
	   echo $uneligne['nom'];
	   echo "</br>";
       }
  }			
   }  */

catch(PDOException $e){
	echo "erreur de traitement!!";
}




?>

</body>
</html>
