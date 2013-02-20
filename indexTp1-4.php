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
	{echo "connexion réussie !!";}
else
	{echo "erreur de connexion à la base de données !!";
	 die;}
$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="select * from artiste where id=20";

try
{
	$req=$bd->query($sql);
	echo "L'artiste num�ro 20 est :". "<br/>";
	$lartiste=$req->fetch(PDO::FETCH_OBJ);
	
	echo $lartiste->prenom. " ";
	echo $lartiste->nom;
	echo "</br>";
	echo 'Date de naissance : ' . $lartiste->anneeNaiss . '</br>';
					
}

catch(PDOException $e){
	echo "Il faut saisir un num�ro!!!";
}




?>

</body>
</html>
