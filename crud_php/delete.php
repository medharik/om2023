<?php 
include_once "functions.php";
//recuperer les data 
$id=$_GET['id'];//?id=1
supprimer($id);
//redirection en php vers index.php
header("location:index.php");


?>

