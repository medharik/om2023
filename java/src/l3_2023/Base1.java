package l3_2023;

public class Base1 {

	public static void main(String[] args) {
		
		//type de donnees (types de variables )
		//A- types primitifs 
			// A-1 Nombre : 
			//A-1-1 REEL : float(4) et double (8)
			//A-1-2  : entiers : byte(1),short(2), int(4),long(8)
			//A-2 caracteres : char (1)
			//A-3 Boolean : bool
		// chaines de caracteres : String 
		//B- Autres types : Classe 
		
		byte b=1;
		System.out.println("B 1 est : "+b);//1
		int i=3;
		System.out.println(" i 1  est "+i);//3
//		i=b;
//		System.out.println("i 2 est "+i);//1
		
		b=(byte) i;
		System.out.println(" b 2 est "+b);//1
short s =10;
int ii=9;
s=(short) ii;
i=s;
double d=100.909090;
float f= (float)3.5;

	}
}
