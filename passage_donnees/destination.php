<?php 
// recuperer les donnees 
// $_GET : tableau associatif qui contient (automatiquement) toutes les donnees envoyer a cette page 
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>le libelle est <?=$_GET['libelle']?></h2>
    <h2>le prix est <?=$_GET['prix']?></h2>
    <h3>la qte en stock est <?=$_GET['qtestock']?></h3>

    
</body>
</html>