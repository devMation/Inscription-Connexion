<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insription</title>
</head>

<body>
    <form method="post" action="traitement.php">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="pseudo" placeholder="Pseudo">
        <input type="email" name="email" placeholder="Email">
        <!-- Assurez-vous que le champ d'email a le name="email" -->
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" value="Envoyer" name="ok">
    </form>
</body>

</html>