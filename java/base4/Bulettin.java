package base4;

import java.util.Scanner;

public class Bulettin {
public static void main(String[] args) {
	final  int  N=3;
	double note[]=new double[N];
	int []coef=new int [N];
	String matiere[]=new String[N];
	Scanner clavier =new Scanner(System.in);
	
	for (int i = 0; i < matiere.length; i++) {
		System.out.println("Entrer le nom de la matiere "+(i+1));
		matiere[i]=clavier.next();
		System.out.println("Entrer le coeficient de "+matiere[i]);
		coef[i]=clavier.nextInt();	
	}
	
	for (int i = 0; i < matiere.length; i++) {
		System.out.println("Entrer la note de "+matiere[i]);
		note[i]=clavier.nextDouble();
	}
	
	//calcul
	double somme=0,sommeCoeficient=0;
	for (int i = 0; i < matiere.length; i++) {
		somme+=note[i]*coef[i];	
		sommeCoeficient+=coef[i];
	}
	double moyenne = somme/sommeCoeficient;
	
	System.out.println("La moyenne est "+moyenne);
	if (moyenne<10) {
		System.out.println("les matieres a ratrapper");
		for (int i = 0; i < matiere.length; i++) {
			if (note[i]<10) {
				System.out.println(matiere[i]+" car vous n'avez eu que  "+note[i]);
			}
		}
	}
	
	for (int i = 0; i < matiere.length; i++) {
		System.out.println(matiere[i]+" "+coef[i]+" "+note[i]);
	}
	
	

	
	
	 

}
}
