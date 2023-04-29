package heritage;

import java.util.Date;

import poo.encapsulation.Produit;

public class TestHeritage {
public static void main(String[] args) {
	
Produit  hp =new Produit();
Produit dell;
try {
	dell = new Produit("dell satelite", -6000);
	dell.afficher();
} catch (Exception e1) {
	// TODO Auto-generated catch block
	e1.printStackTrace();
}
Produit sony=new Produit("sony vaio", 30000, 5);

hp.afficher();
sony.afficher();
	hp.libelle="hp dv 8";
	
	try {
		hp.setPrix(-5000);
		hp.setQteStock(10);
		
		hp.vendre(5);
		hp.afficher();
				
	} catch (Exception e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
	

	ProduitAlimentraire lait=new ProduitAlimentraire();
	lait.libelle="UHT JAWDA";
	try {
		lait.setPrix(10);
		lait.setQteStock(10);
		lait.setDateExpiration(new Date(2023, 1, 1));
		lait.vendre(10);
		lait.afficher();
	} catch (Exception e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
		System.out.println("Prix incorrect");
	}
	
	
	
}
}
