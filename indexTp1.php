<?php
$dsn='mysql:host=localhost;dbname=cinema';
$utilisateur='root1';
$motdepasse='';
$ok=true;


$doctrine=$this->getDoctrine();
$em=$this->get('doctrine:orm:entity_manager');
$em->remove($role);
$em->flush();

?>
<p>
<?php
echo sha1('adminpass');
?>
<?php
try{
	$bd=new PDO($dsn,$utilisateur,$motdepasse);
}
catch(PDOException $e){
	$ok=false;
}
if($ok)
	{echo "connexion réussie !!";}
else
	{echo "erreur de connexion à la base de données !!";}
?>