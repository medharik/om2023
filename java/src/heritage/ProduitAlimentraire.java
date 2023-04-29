package heritage;

import java.util.Date;

import poo.encapsulation.Produit;
//produitAliementaire herite d'un produit 
//par consequent on traitera produitAlimentaire comme un produit en general

public class ProduitAlimentraire extends Produit{
	public ProduitAlimentraire(String libelle,double prix,Date dateexpiration) {
	super();
		this.dateExpiration=dateexpiration;
		
	
	}
	private Date dateExpiration;
	
	public void setDateExpiration(Date dateExpiration) {
		this.dateExpiration = dateExpiration;
	}
	public Date getDateExpiration() {
		return dateExpiration;
	}
boolean estExpire() {
	return dateExpiration.after(new Date());
}

}