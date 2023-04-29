package poo.encapsulation;

public class Produit {
	//encapsulation : 
		// 1- 1 des principes de la POO
		//2 - Role principal : protection des donnees 
		// 3- comment : en reduisant la visibilite (en private ou protected)
		// (pour interdire l'acces externe) et n'autoriser l'acces que par des 
//		getters / setters (souvent public ou protected)
		//data : attributs (fields) => variable d'instance
public String libelle;
private double prix;
private int qteStock;
//un constructeur : une methode specdiale  qui initialise les atrributs
//creer un construteur de produit

//exemple 3

//lecture
public double getPrix() {
	return prix;
}

public Produit() {
	// TODO Auto-generated constructor stub
}

public Produit(String libelle) {
	super();
	this.libelle = libelle;
}

public Produit(String libelle, double prix) {
	
	this.libelle = libelle;
	this.prix = prix;
}



//ecriture
public void setPrix(double prix) throws Exception {
	if (prix>=0) {
		this.prix = prix;
	}else {
//		System.out.println("Erreur de prix");
		throw new Exception("Erreur : prix incorrect");
	}
}



public int getQteStock() {
	return qteStock;
}
public void setQteStock(int qteStock) {
	if (qteStock>0) {
		this.qteStock=qteStock;
	} else {
System.out.println("erreur de qte en stock");
	}
}
public void afficher() {
System.out.println(libelle+" : "+prix+"DHS");
System.out.println("la qte en stock est "+qteStock);
}
public double vendre(int qteAvendre){
	double ttc=0;
	if (ventePossible(qteAvendre)) {
		ttc=qteAvendre*prix;	
		sortieStock(qteAvendre);
	}else {
		System.out.println("stock limite");
	}
	
	return ttc;

}
private boolean ventePossible(int qte){
	return qte<qteStock;
	}

void entreeStock(int qte) {
	qteStock+=qte;
}
void sortieStock(int qte) {
	qteStock-=qte;
}
}
 

