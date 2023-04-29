<?php
  function connecter()
{
    // Paramètres de connexion à la base de données
$serveur = 'localhost';
$utilisateur = 'root';
$motDePasse = '';
$nomBaseDeDonnees = 'crud3';
// FETCH_BOTH = fetch num et fetch assoc

try {
    // Création d'un objet PDO pour la connexion à la base de données
    $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motDePasse);
    // Paramétrage des options de PDO
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $connexion;
   // $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
    // Gestion des exceptions
    echo "Erreur de connexion : " . $e->getMessage();
}
}

function ajouter($libelle,$prix){
    $connexion=   connecter();
    $rp= $connexion->prepare("insert into produit(libelle,prix) values (?,?)");
    $rp->execute([$libelle,$prix]);
}
//liste des produits
function listeProduits(){
    try{
        $connexion=   connecter();
        $rp= $connexion->prepare("select * from produit order by id desc ");
        $rp->execute();
        // $resultat = $rp->fetchAll(PDO::FETCH_ASSOC);
        $resultat = $rp->fetchAll();
        return $resultat;

     } catch (PDOException $e) {
        die("Erreur de selection des produits ".$e->getMessage());
    }
   
}
//liste des produits
//supprimer(1)
function supprimer($id){
    try{
        $connexion=   connecter();
        $rp= $connexion->prepare("delete from produit where id=? ");
        $rp->execute([$id]);
    

     } catch (PDOException $e) {
        die("Erreur de suppression des produits ".$e->getMessage());
    }
   
}
function find($id){
    try{
        $connexion=   connecter();
        $rp= $connexion->prepare("select * from produit where id=? ");
        $rp->execute([$id]);
    return  $rp->fetch();
    

     } catch (PDOException $e) {
        die("Erreur de consultation du produit ayant id=$id ".$e->getMessage());
    }
   
}
?>