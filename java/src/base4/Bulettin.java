package base4;

import java.util.Iterator;
import java.util.Scanner;

public class Bulettin {
public static void main(String[] args) {
	final  int  N=3;
	double note[]=new double[N];
	int []coef=new int [N];
	String matiere[]=new String[N];
	Scanner clavier =new Scanner(System.in);
	String [] etudiants= {"Diouf Aida","Alami ALi"};
	String [] poli= {"Mme","Mr"};
	double moyenne []=new double[etudiants.length];
	//saisie des matieres et leurs coeficients 
	for (int i = 0; i < matiere.length; i++) {
		System.out.println("Entrer le nom de la matiere "+(i+1));
		matiere[i]=clavier.next();
		System.out.println("Entrer le coeficient de "+matiere[i]);
		coef[i]=clavier.nextInt();	
	}
	//saisie des  notes de ces matieres pour chaque etudiant 
	
	for (int j = 0; j < etudiants.length; j++) {
		System.out.println("Veuillez saisir les notes de "+poli[j]+" "+etudiants[j]);
	
	
	
	
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
	
	 moyenne[j] = somme/sommeCoeficient;
	
	System.out.println("La moyenne est "+moyenne[j]);
	if (moyenne[j]<10) {
		System.out.println("les matieres a ratrapper");
		for (int i = 0; i < matiere.length; i++) {
			if (note[i]<10) {
				System.out.println(matiere[i]+" car vous n'avez eu que  "+note[i]);
			}
		}
	}
	
	double max=note[0];
	int pmax=0;
	for (int i = 0; i < matiere.length; i++) {
		if (note[i]>max) {
			max=note[i];
			pmax=i;
		}
		
	}
	System.out.println("la note max est "+max+" en "+matiere[pmax]);
	
	}//fin for des etudiants 
	
	double maxe=moyenne[0];
	int pmax=0;
	for (int i = 0; i < moyenne.length; i++) {
		if (moyenne[i]>maxe) {
			maxe=moyenne[i];
			pmax=i;
			
		}
	}
	System.out.println("l'etudiant ayant la meilleure note est "+etudiants[pmax]);
	
//	for (int i = 0; i < matiere.length; i++) {
//		System.out.println(matiere[i]+" "+coef[i]+" "+note[i]);
//	}
//	
	

	
	
	 

}
}
