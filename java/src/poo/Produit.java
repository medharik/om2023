package poo;

public class Produit {
//encapsulation : 
	// 1- 1 des principes de la POO
	//2 - Role principal : protection des donnees 
	// 3- comment : en reduisant la visibilite (en private ou protected)
	// (pour interdire l'acces externe) et n'autoriser l'acces que par des 
//	getters / setters (souvent public ou protected)
	//data : attributs (fields) 
public	String libelle;
	double prix;
private	int qteStock;
protected  String  marque;
	//modificateur d'acces / portee / Visibility
	//programmes : methodes (methods)
	
	 void afficher() {
		 	System.out.println(libelle +" coute "+prix+"DHS");
	}
	private   void verifierStock() {

		  if (qteStock>0) {
			System.out.println(libelle +"  est en stock");
		} else {
			System.out.println(libelle +"  est en rupture de  stock");

		}
	}
	   double  ttc() {
		   return prix*1.20;
	}
	  
}
