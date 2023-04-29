<?php 
$hp=['libelle'=>'hp dv 7','image'=>'https://via.placeholder.com/1000x1500?text=hp'];
$dell=['libelle'=>'dell s6','image'=>'https://via.placeholder.com/1000x1500?text=dell'];
$x=file_get_contents("https://fakestoreapi.com/products");
$x=json_decode($x);
// print_r($hp->prix);

$produits=$x;
// for ($i=0; $i <100 ; $i++) { 
//     $p=['libelle'=>"produit $i",'image'=>'https://via.placeholder.com/1000x1500?text=produit num'.$i];

//     $produits[]=$p;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 1 en PHP</title>
    <link rel="stylesheet" href="ateleir_1.css">
</head>
<body>
    <div class="container">
       
    <?php for($i=0;$i<count($produits);$i++){ ?>
        <div class="produit">
            <img src="<?=$produits[$i]->image?>" alt="">
            <h3><?=$produits[$i]->title?></h3>
        </div>
    <?php } ?>
       
        
    </div>
    
</body>
</html>