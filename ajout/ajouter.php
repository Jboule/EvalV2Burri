
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajout</title>
</head>

<body>
    <h1>Ajouter un Films</h1>
    
    <form action="afficher.php" method="post">

        <label for="titre">Titre : </label>
        <input type="text" name="titre" id="titre">
        <br><br>
        <label for="realisateur">Realisateur : </label>
        <input type="text" name="realisateur" id="realisateur">
        <br><br>
        <label for="genre">Genre : </label>
        <input type="text" name="genre" id="genre">
        <br><br>
        <label for="proprio">Proprio : </label>
        <input type="text" name="proprio" id="proprio">
        <br><br>

        <input type="submit" value="Envoyer">

    </form>
</body>

</html>