<?php
$dsn='mysql:host=locallhost;dbname=cinema';
$utilisateur='root1';
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
$sql="select nom,prenom from artiste";
try{
$req=$bd->query($sql);

while($ligne=$req->fetch(PDO::FETCH_OBJ)){
			echo $ligne->nom . " ";
			echo $ligne->prenom;
			echo '</br>';
			}
}
catch(PDOException $e){
echo "requête fausse";
}
?>