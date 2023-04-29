<?php 
$message="";
$classe="d-none";
// $x="";//"",0,0.0,[]<=>false
// $x="";
// if($x!=null){
   

// }
isset($age);//false
isset($x);//true
//!empty($x);//false
empty($age);//erreur
//contact.php?s=yes
// s 'il y s dans le lien et que la valeur de s = yes alors on affiche de succes
if(isset($_GET['s'])){
    $classe="d-block";
    if ( $_GET['s']=='yes' ) {
        $message = "MEssage envoye avec succes";
        $classe .=" alert-success";
    }else{
        $classe .=" alert-danger";
        $message = "Erreur lors de la transmission du message";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <h3 class="text-center text-primary fs-5">Nous contacter</h3>
    <div class="container shadow">
        <div class="alert alert-success <?=$classe?>">
        <?=$message?>
        </div>
        <form action="process_contact.php" method="post">
            <div class="row">

                <div class="col-md-6 border">
                    <div class="my-3">
                        <input type="text" name="np" id="np" class="form-control" placeholder="Nom et Prenom">
                    </div>
                    <div class="my-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="my-3">
                        <input type="tel" name="tel" id="tel" class="form-control" placeholder="Tel">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="my-3">
                        <input type="text" name="sujet" id="sujet" class="form-control" placeholder="Sujet">
                    </div>
                    <div class="my-3">
                        <textarea type="text" name="message" id="message" class="form-control" placeholder="message"></textarea>
                    </div>
                    <div class="my-3">
                        <button type="submit"  class="btn btn-primary">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>