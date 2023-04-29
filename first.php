<?php 
//langage compile : java , c (typage statique)
//langage  interprete : php,js,ruby (typage dynamique)
$x=19;
$age=20;
$prenom='Rim';
$nom="alami";
$genre="femme";
$poli="Mme";
if ($genre=="homme") {
    $poli="Mr";
}else if($genre=="femme"){
$poli="Mme";
}else{
  $poli="Mlle";
}
$color=($genre=="femme")?  "pink":(($genre=="homme")? "blue":"grey") ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: <?=$color?>;">
    <h1>Affichage dynamique</h1>
    <h2><?=$poli?>. <?php echo $nom ;?>  <?php echo $prenom ; ?>  a <?php echo $age ;?>ans</h2>
    <h2><?=$poli?>. <?php echo "$nom $prenom a $age ans "  ?></h2>
    <h2><?=$poli?>. <?php echo '$nom $prenom a $age ans '  ?></h2>
    <h2><?=$poli?>. <?php echo $nom.' '. $prenom. ' a '. $age. 'ans '  ?></h2>
    <h2><?=$poli?>. <?= $nom ;?>  <?= $prenom ; ?>  a <?= $age ;?>ans</h2>
</body>
</html>
<?php 
//code php calculate age from birthday?

  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "12/17/1983";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  echo "Age is:" . $age;
?>




<!--DELIMITER-->Source: https://stackoverflow.com/questions/3776682




?>