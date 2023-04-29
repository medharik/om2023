<?php 
// creer une fonction qui permet de generer un requete sql "insert"

//insertSQL("produit",['libelle'=>'hp','prix'=>5000])=> 
//"insert into produit(libelle,prix) values (?,?)";


function insertSQL($table,$data){
    
    $keys=array_keys($data);
    // print_r($keys);// ['libelle','prix'];[a,b,c]=> "a,b,c"
    //['libelle','prix'] => "(libelle,prix)"
    $str1=join(",",$keys);
   
    // ['libelle','prix','qte'] => [?,?,?]
    
    $inter=    array_map(function ($v){ return '?';},$keys);
    // print_r($inter);
    //inter=[?,?]=> str2 : "?,?"
    $str2=join(",",$inter);
    $sql = "insert into $table ($str1) values($str2) ";
    echo $sql;
}

insertSQL("produit",['libelle'=>'hp dv 7','prix'=>2300,'qte'=>1000]);

?>