<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-center text-primary">Nouveau Produit</h3>
    <?php 

  //if(isset($_GET['age']))  echo  $_GET['age'];//age=20
    // s'il y a une infos 'op' presente  dans le lien : $_GET['op'] alors affiche un message 
    if(isset($_GET['op']) && $_GET['op']=="yes" ){   ?>

    <div class="alert alert-success">
        Le produit est ajoute avec succes 
    </div>
<?php } ?>


<form action="store.php" class="shadow p-3" method="post" style="width: 50%; margin:auto">
    <div class="mb-3">
        <label for="libelle"  class="form-label">Libelle</label> <input id="libelle" class="form-control" type="text" name="libelle" id="">
       
    </div>
    <div class="mb-3">
        <label for="prix" class="form-label">Prix</label><input id="prix" type="text" name="prix" class="form-control">
    </div>
    <div class="mb">
        <button class="btn btn-success">Ajouter le produit</button>
    </div>
</form>
</body>
</html>