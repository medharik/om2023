<?php 
include_once "functions.php";
//recuperer les data 
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$connexion=connecter();
ajouter($libelle,$prix);
?>


