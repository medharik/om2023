package poo;

public class Personne {
//attributs : 
	String nom;
	String prenom;
	int age;
	//methodes : 
	String nomComplet(){
		return nom+" "+prenom;
	}
	 void afficher() {

		 System.out.println(nomComplet()+" a "+age+"ans");
	}
	  void maj() {

		 if (age>18) {
			System.out.println(nomComplet()+" est Majeur");
		} else {
			System.out.println(nomComplet()+" est Mineur");

		}
	}
}
