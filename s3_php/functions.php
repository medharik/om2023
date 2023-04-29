<?php 
// les fonctions : sous programmes permettant de traiter une tache dans le programme principal]
// programmes =  plusieurs fonctions (procedures) ( role precis )
//  la programmation procedurale / fonctionnelle = consiste a decouper un programme en plusieurs fonctions

//exemple 1  : une fonction qui recoit deux nombres retourne la somme 
// (1,2)=>3
//definition de la fonction ajouter
function ajouter($a,$b=0)
{
    $somme = $a+$b;
    return $somme;
}
//exemple d'une fonction qui calcul et affiche la somme : 

function ajouter2(&$a,&$b){
$a = $a+$b;//variable locale
$b=9;
}
// // function lambda ou anonyme  ou callback
$somme = function  ($a,$b){return $a+$b;};





?>