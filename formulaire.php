<!DOCTYPE HTML>

<html lang="fr-FR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Formulaire d'Insertion </title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Formulaire</h1>
        <form method="post" action="insert.php">
            Chambre <input type="radio" name="Catégorie" value="Chambre">
            Suite <input type="radio" name="Catégorie" value="Suite"><br>
            Type de chambre: <input type="radio" name="Type" value="Simple"> Simple  <input type="radio" name="Type" value="Double"> Double <br>
            Nombre de personnes dans la suite: <input type="radio" name="Type" value="2 personnes"> 2 personnes <input type="radio" name="Type" value="4 personnes"> 4 personnes <input type="radio" name="Type" value="6 personnes"> 6 personnes<br>
            Options:<br>
            Baignoire <input type="checkbox" name="Options" value="Baignoire"> Balcon <input type="checkbox" name="Options" value="Balcon"><br>
            Mini bar <input type="checkbox" name="Options" value="MiniBar"> Télévision <input type="checkbox" name="Options" value="Télévision"><br>
            Avec vue <input type="checkbox" name="Options" value="Vue"><br>
            Prix: <input type="number" name="Prix" value="Prix"><br>
            <input type="submit" value="Réserver">
        </form>
    </body>
</html>
