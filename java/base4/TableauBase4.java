package base4;

import java.util.Arrays;

public class TableauBase4 {
public static void main(String[] args) {
	//tableau  : ensemble de donnees du MEME type et de taille statique 
	
	//declaration d'un tableau : 
	double t[];
	//instanciation : 
	t=new double[3];
	System.out.println("adresse memoire "+t);
	System.out.println("la taille/la longueur du tableau "+t.length);
	System.out.println("la premiere valeur "+t[0]);
	System.out.println(" la derniere valeur est "+t[t.length-1]);
//exemple 2
	int n[]=new int[2];
	n[0]=19;
	n[1]=10;
//	System.out.println(n[0]);
	//ou en utilisant un INITIALIZER
int d[]={19,10};
int[] z,a;
int e[],p;
//les matrices 
double m[][]=new double[3][2];
m[0][0]=3;
m[2][1]=10;
//ou
double mi[][]= {{3,4},{8,9},{0,10}};
//tableau avec n dimensions
double dn[][]=new double[2][];
dn[0]= new double[3];//={1,4,5}
dn[1]=new double [2];

}
	
}
