<?php 

// Cookie : donnees entregistrees par  composant web (via le navigateur) 
// dans la machine du client

//creer un cookie : 
setcookie("prenom","john",time()+10,"/",'',true,true);
setcookie("age",30,time()+30);
//test

?>