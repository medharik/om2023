package poo.encapsulation;

import javax.swing.JOptionPane;

public class Test {
	public static void main(String[] args) {
		Produit hp=new Produit();
		hp.libelle="hp dv 8";
		try {
			hp.setPrix(-10);
//			hp.qteStock=0;
			hp.setQteStock(10);;
			System.out.println(" le prix est "+hp.getPrix());
//			hp.prix=100;
			hp.afficher();
			double ttc =hp.vendre(10);
			System.out.println("ttc est "+ttc);
			hp.afficher();
		} catch (Exception e) {
			// TODO Auto-generated catch block
//			e.printStackTrace();
//			System.out.println(e.getMessage());
			JOptionPane.showMessageDialog(null, e.getMessage());
		}
//	
	}
}
