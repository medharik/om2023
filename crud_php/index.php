<?php 
include_once "functions.php";
$produits=listeProduits();
// var_dump($produits);
// echo $produits[0]['libelle']; //fetch_assoc
// echo $produits[0]->libelle;//fetch_OBJ
// echo $produits[0][1];//fetch_NUM

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits</title>
</head>
<body oncontextmenu="return false">
    <h2>Liste  des produits</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Libelle</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produits as $p){ ?>
                    <tr>
                        <td><?=$p->id?></td>
                        <td><?=$p->libelle?></td>
                        <td><?=$p->prix?></td>
                        <td>
                            <a onclick="return confirm('Supprimer?')" href="delete.php?id=<?=$p->id?>">Supprimer</a>
                            <a href="">Modifier</a>
                            <a href="show.php?id=<?=$p->id?>">Consulter</a>
                    </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>