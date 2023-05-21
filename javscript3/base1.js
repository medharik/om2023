//afficher une message dans la console :
console.log("mon premier programme en JS");
//desclaration : 
let age=24;
let prenom="ali";
const TVA =20;
console.log('message 2 '+age,prenom,TVA);

//les tableaux : 
let produits=["hp","dell","sony"];
// console.log("tableau est ",produits);
let longueur=produits.length;
//ajouter a la fin 
produits.push("acer");
//supprimer la fin 
produits.pop();
produits.pop()
produits.shift();
produits.unshift("toshiba","MAc Air");
console.log("apres push ",produits);
let noms=["ali","rim","hicham"];
noms.splice(1,1,"john");
// console.log('apres splice 1 ',noms)