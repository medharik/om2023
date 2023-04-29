package poo;

public class TestPersonne {
public static void main(String[] args) {
	//declarer un objet (ali) de la classe Personne 
	// on dit Objet ou instance de classe
	Personne ali;
	//instaciation : 
	ali=new Personne();
	ali.age=10;
	ali.nom="Alami";
	ali.prenom="Ali";
	
	ali.afficher();
	
	ali.maj();
}
}
