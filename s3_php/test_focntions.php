<?php 
include "functions.php";
$s=ajouter(10,30);
echo "la somme est $s", "/ appel direct a la fonction".ajouter(33,7)."<br>";
// ajouter2(12,8);
$x=10;
$y=20;
// passage par valeur
echo "<br>x avant l'appel de la fonction est ".$x;
ajouter2($x,$y);//$a=10;$x=10;
echo "<br>x apres l'appel de la fonction est ".$x;
echo "<br>y  apres l'appel de la fonction est ".$y;
// // passage par adresse / reference
// echo "<br>x avant l'appel de la fonction est ".$x;
// ajouter2($x,$y);//$a=10;$x=10;
// echo "<br>x apres l'appel de la fonction est ".$x;
$g=10;
// $h=$g;//passage par valeur : $h=10 (h et g sont dans 2 memoires differentes)
$h=&$g;//passage par adresse : $h=10 (h et g sont dans la  memoires
$g=30;
echo "<br>g est $g , h est $h<br>";
echo "la somme avec fct anonyme ".$somme(1,2);

$ts=[1,2,3];
// [1,2,3] => traitement (fct callback ) => [2,4,5]

$double=function ($v){ return $v*2;};
$resultat=array_map(function ($v){ return $v*2;},$ts);//[2,4,6]
print_r($resultat);
$noms =["rim","ayoub","babacar"];
// $noms = array_map(function ($v){ return $v.toUpperCase();},$noms);

// $noms => traitement => [3,5,6]
// rappel 
// echo "<br> la longueur d'une chaine de caractere en php ".strlen("ali");
$l=array_map(function($v){ return strlen($v);},$noms);
echo "<hr>";
// print_r($l);
// insert into produit(libelle,prix) values(?,?,?)
//['libelle'=>'hp','prix'=>5000,'qte'=>2] => trt => ['?','?','?']
//['libelle'=>'hp','prix'=>5000] => trt => ['?','?']
$interog=array_map(function($x){ return '?';},['libelle'=>'hp','prix'=>5000]);
//print_r($interog);
