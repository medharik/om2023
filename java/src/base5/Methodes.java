package base5;

import java.util.Scanner;
import java.util.Locale.LanguageRange;

public class Methodes {
static	double ajouter1(double x, double y){
		
		double somme=x+y;
	return somme;
	}

static	double ajouter2(){
	Scanner clavier=new Scanner(System.in);

	System.out.println("Entrer a");
	double a =clavier.nextDouble();
	System.out.println("Entrer b");
	double b =clavier.nextDouble();
	double somme=a+b;
	
return somme;
}

static	void ajouter3(){
	Scanner clavier=new Scanner(System.in);

	System.out.println("Entrer a");
	double a =clavier.nextDouble();
	System.out.println("Entrer b");
	double b =clavier.nextDouble();
	double somme=a+b;
	System.out.println(" la somme 3 est "+somme);
}
	
	
	public static void main(String[] args) {
		Scanner clavier=new Scanner(System.in);
		
		
		double s =ajouter1(1, 9);
		System.out.println(" la somme est "+s);
		
	
		
		System.out.println(" la somme 2 est "+ajouter2());
		
	ajouter3();
		
		
		
	}
	
}
