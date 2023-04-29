package l3_2023;

public class Base2 {

	public static void main(String[] args) {
		int age =20;
		boolean majeur= age>18;

		System.out.println(majeur);
	if (majeur) {
		System.out.println("Majeur");
	}else {
		System.out.println("Mineur");
	}
	int i=0;
	
	i++;//post incrementation par 1 
	System.out.println("A- i est "+i);
	++i;//pre incrementation par 1 
	System.out.println("B- i est : "+i);
	
	if (i++ == 3) {
		System.out.println("Ok "+i);
	}else {
		System.out.println("Ko "+i);
	}
	
	age=31;
	i=3;
	boolean b1= (age>10  && i++>300);
	System.out.println("b1 "+b1+" i "+i);
//i=4
	boolean b2= (age>40 && ++i==4);
	System.out.println("b2 "+b2+" i "+i);

	boolean b3= (age>30 || ++i==4);
	System.out.println("b3 "+b3+" i "+i);

	boolean b4= (age==30 || ++i>5);
	System.out.println("b4 "+b4+" i "+i);


	
	}
}
