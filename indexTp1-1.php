<?php
$dsn='mysql:host=localhost;dbname=cinemas';
$utilisateur='';
$motdepasse='';
$ok=true;
try{
	$bd=new PDO($dsn,$utilisateur,$motdepasse); // cr�ation de l'objet $bd (op�ration d'instanciation)
}
catch(PDOException $e){
	$ok=false;
}
if($ok)
	{echo "connexion r�ussie !!";}
else
	{echo "erreur de connexion � la base de donn�es !!";}
?>