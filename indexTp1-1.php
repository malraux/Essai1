<?php
$dsn='mysql:host=localhost;dbname=cinemas';
$utilisateur='';
$motdepasse='';
$ok=true;
try{
	$bd=new PDO($dsn,$utilisateur,$motdepasse); // création de l'objet $bd (opération d'instanciation)
}
catch(PDOException $e){
	$ok=false;
}
if($ok)
	{echo "connexion réussie !!";}
else
	{echo "erreur de connexion à la base de données !!";}
?>