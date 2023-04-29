<?php 
//tableau : ensemble de data
//a- tableau indexe (numerote a partir de 0)
$prix=[12,199,100.5,"test"];
// echo $prix[0];
$prix[0]=200;
$prix[30]="hp dv 700";

// array push
$prix[]=202;
unset($prix[1]);
//hash , tableau associatif
$a=["libelle"=>"hp dv 5",'prix'=>100,'qte'=>10];

//ajouter 
$a['marque']='HP';
$a['prix']=6000;
$a[]=800;
$a[]=600;
unset($a['marque']);
 echo "la taille longueur du tableau ".count($a);

print_r($a);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les tableaux en PHP </title>
</head>
<body>
    
</body>
</html>