package l3_2023;

import java.util.Scanner;

public class Base3 {
public static void main(String[] args) {
	double note=10;
	Scanner clavier=new Scanner(System.in);
	System.out.println("Entrer une note");	
	note=clavier.nextDouble();
	
	if (note<0) {
		System.out.println("Erreur : note<0");
	}else if(note<10) {
		System.out.println("Non Admis");
	}else if(note<=20) {
		System.out.println("Admis");
	}else {
		System.out.println("Erreur : note>20");
	}
//	if (note>=10 && note<=20) {
//		System.out.println("Admis");
//	}else if(note>=0 && note<10){
//		System.out.println("non admis");
//	}else  {
//		System.out.println("Erreur");
//	}
//	
//	else {
//		System.out.println("Non admis");
//
//	}
//	if(note<10 || note>20)  {
//		System.out.println("Non admis");
//	}
//	if(!(note>=10 && note<=20))  {
//		System.out.println("Non admis");
//	}
	
	if (note<0) {
		System.out.println("Erreur : note<0");
	}else if(note<10) {
		System.out.println("Non Admis");
	}else if(note<=20) {
		System.out.println("Admis");
	}else {
		System.out.println("Erreur : note>20");
	}
}
}
