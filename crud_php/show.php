<?php 
include_once "functions.php";
$id=$_GET['id'];
$produit=find($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulter le produit</title>
</head>
<body>

<h2>le prix  du produit  <?=$produit->libelle?> est  <?=$produit->prix?>DHS</h2>

</body>
</html>