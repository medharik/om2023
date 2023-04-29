<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- deux methodes d'envoi : post / get -->
<form action="destination.php" method="get">
    Libelle : <input type="text" name="libelle" id="">
    Prix : <input type="text" name="prix" id="">  
    Qte en stock : <input type="text" name="qtestock" id="">  
    <button>Envoyer</button>
</form>

<form action="reception_login.php" method="post">
Login : <input type="text" name="login" id="">
Mot de passe  : <input type="password" name="passe" id="">
<button type="submit">Envoyer</button>
</form>
</body>
</html>