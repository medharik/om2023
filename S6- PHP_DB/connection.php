<?php 
// connextion bd mysql  pdo?    
// new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName,$this->dbUser,$this->dbPass);        
//host+ user/password + // db_name
$cnx = new PDO('mysql:host=localhost;dbname=dbl3', "root","");
try{
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pr=$cnx->prepare("update produit set libelle ='sony vaio s2' where id=5");
    $pr->execute();
}catch(Exception $e){
echo "erreur : ".$e->getMessage();
}
