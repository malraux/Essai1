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
	{echo "connexion r�ussie !!";}
else
	{echo "erreur de connexion � la base de donn�es !!";
	 die;}
	 
$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);// sert � afficher les erreurs potentielles
$sql="select nom,prenom from artiste1";
try{
	$req=$bd->query($sql);
	while($ligne=$req->fetch(PDO::FETCH_OBJ)){
			echo $ligne->nom ;
			echo $ligne->prenom;
			}
}
catch(PDOException $e){
	echo "requ�te fausse";
}
?>