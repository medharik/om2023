package l3_2023;

import java.util.Scanner;

import poo.Produit;

public class Exo2023 {
	public static void main(String[] args) {
		Scanner clavier=new Scanner(System.in);
		double note=0;
		
		double somme=0;
		Produit hp=new Produit();
	
		
		for (int i = 1; i <= 3; i++) {
			boolean correcte;
			int essai=3;
			do {
				System.out.println("Entrer la  note numero : "+i);
				note=clavier.nextDouble();
				 correcte=note>=0&& note<=20; 
				if (!correcte) {
					essai--;
					if(essai==0) {
						System.out.println("Arret du programme ");
						return ;
						
					}
					System.out.println("Erreur , il vous reste "+essai+" essais");	
				}
				
//				return ;
			} while (!correcte);
	
			somme+=note;
			
		}
		
		
		double moyenne=somme/3;
		
		System.out.println(" la moyenne est "+moyenne);
		if (moyenne<0  || moyenne>20) {
			System.out.println("erreur : note<0");	
		}
		else if(moyenne<10) {
			System.out.println("recalé");
		}
		else if(moyenne<12) {
			System.out.println("passable");
		}else if(moyenne<14) {
			System.out.println("assez-bien");
		}else if(moyenne<16) {
			System.out.println("bien");
		}else {
			System.out.println("Tres bien ");
		}
		
		{
			int x=0;
			
			{
				int y=1;
				
			}
			int y=10;
			System.out.println("y est "+y);
		}
		
		
	}

}
