package poo;

public class Rectangle {
//attributs
double largeur;
double longueur;
String nom;
//methodes 
void calculerSurface(){
	
	double surface=largeur*longueur;
	System.out.println(" la surface de " +nom   + " est "+surface);
}

void estcarré(){
	if (largeur==longueur) {
		System.out.println(nom+" est un carré");
	} else {
System.out.println(nom+ " n'est pas un carré");
	}
}
}
