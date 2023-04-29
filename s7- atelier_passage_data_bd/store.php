<?php 
//recuperer les      inputs  :      
$libelle=$_POST['libelle'];//sony x'1
$prix=$_POST['prix'];

// connxion bd
$cnx = new PDO('mysql:host=localhost;dbname=dbl3', "root","");
try{
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // ' " ,...  pour la protecgtion contre l'injection sql 
    $pr=$cnx->prepare("insert into produit(libelle,prix) values (?,?)");
    $pr->execute([$libelle,$prix]);
    //redirection vers create.php
    header("location:create.php?op=yes");
}catch(Exception $e){
echo "erreur : ".$e->getMessage();
}


?>  
