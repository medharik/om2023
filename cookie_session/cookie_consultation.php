<?php 
//consulter les cookies 
if(isset($_COOKIE['prenom']))
echo $_COOKIE['prenom'];
if(isset($_COOKIE['age']))
echo "<br>age est ".$_COOKIE['age'];
?>