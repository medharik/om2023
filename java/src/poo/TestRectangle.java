package poo;

public class TestRectangle {
public static void main(String[] args) {
	
	
	Rectangle r1=new Rectangle();
r1.largeur=10;
r1.longueur=20;
r1.nom="Rectangle 1 ";
r1.calculerSurface();
r1.estcarré();
Rectangle r2=new Rectangle();
r2.longueur=10;
r2.largeur=10;
r2.nom=" Rectangle 2";
r2.estcarré();

r2.calculerSurface();
}

	
}
