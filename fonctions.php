<?php
class MesFonctions{
    
static function connection($nombase)
 {
     $dsn='mysql:host=localhost;dbname='.$nombase;
     $utilisateur='root';
     $motdepasse='';
     
     try{
	$bd=new PDO($dsn,$utilisateur,$motdepasse);
     }
    catch(PDOException $e){
	$bd=false;
     }
     return $bd;


}   
    /**
 * @assert () == 20
 * @assert () == 117
  */
    
 static function donneNbArtistes()
 {  
    $bd1=  MesFonctions::connection("cinema");
     if($bd1==true) {
     
         $sql="select * from artiste";
	$req=$bd1->query($sql);
	return $req->rowCount();

     }
     return -1;
 } 
 
 
 /**
* @assert (0, 0) == 0
* @assert (1, 2) == 3
* @assert (6, 2) == 10
*/
 static function add($a, $b)
    {
        return $a + $b;
    }
 

}
?>
