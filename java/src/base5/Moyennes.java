package base5;

import java.util.Iterator;
import java.util.Scanner;

public class Moyennes {

	public static void main(String[] args) {
		
	final int N=2;
	String matieres[]=saisirMatieres(N);
	int coef[]=saisirCoeficients(matieres);
	double notes[]=	SaisirNotes(matieres);
	double moyenne=calculerMoyenne(coef,notes);
	afficherMoyenne(moyenne);
	double max=maxi(notes);
	System.out.println("max est "+max);
	}

	
	
	
	
	
	
	
	
	
	
	
	
	 private static double maxi(double[] notes) {
		double max=notes[0];
		for (int i = 0; i < notes.length; i++) {
			
			if (notes[i]>max) {
				max=notes[i];
			}
		}
		return max;
	}













	private static double calculerMoyenne(int[] coef, double[] notes) {
		
		 double moyenne =0,somme=0,sommeCoef=0;
		 for (int i = 0; i < notes.length; i++) {
			
			 somme +=notes[i]*coef[i];
			 sommeCoef +=coef[i];
		}
		 moyenne =somme/sommeCoef;
		return moyenne;
	}

	private static void afficherMoyenne(double moyenne) {
	System.out.println("la moyenne est "+moyenne);
	if (moyenne>=10) {
		System.out.println("Admis");
	} else {
		System.out.println("Ajourné");

	}
		
	}


	private static double[] SaisirNotes(String[] matieres) {
		double notes[]=new double[matieres.length];
		Scanner clavier =new Scanner(System.in);
		for (int i = 0; i < matieres.length; i++) {
			
			System.out.println("Entrer la note de  "+matieres[i]);
			notes[i]=clavier.nextDouble();
			
			
		}
		return notes;
	}

	private static int[] saisirCoeficients(String[] matieres) {
		int coef[]=new int[matieres.length];
		Scanner clavier =new Scanner(System.in);
		for (int i = 0; i < coef.length; i++) {
			
			System.out.println("Entrer le coeficient de   "+matieres[i]);
			coef[i]=clavier.nextInt();
			
			
		}
	return coef;
			}

	static String[] saisirMatieres(int n) {
		String m[]=new String[n];
		Scanner clavier =new Scanner(System.in);
		for (int i = 0; i < n; i++) {
			
			System.out.println("Entrer le nom de la matiere numero "+(i+1));
			m[i]=clavier.nextLine();
			
			
		}
		return m;
	}
}
 