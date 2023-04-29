package heritage;

import poo.encapsulation.Produit;
//HERITAGE : 
// 1- un des principe de la POO 
//2- ROLE : a-  reutiliser le code existant  (meme si on ps de code source)
//			b - factoriser le code (eviter la redondance)
public class ProduitElectronique  extends Produit{
private String config;
public void setConfig(String config) {
	this.config = config;
}
public String getConfig() {
	return config;
}
}
