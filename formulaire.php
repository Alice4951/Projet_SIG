<!DOCTYPE HTML>
<html>
    <head>
        <title> Formulaire d'Insertion </title>
        <link rel="stylesheet" href="style1.css">
    </head>

    <body>
        <h1>Formulaire</h1>
        <form method="post" action="formulaire_traitement.php">
            Chambre <input type="radio" name="type" value="Chambre"/><br> Prix: <ins>300€ pour une chambre</ins><br>
            Suite <input type="radio" name="type" value="Suite"/><br> Prix : 2 personnes : <ins> 400€ <br> 3 personnes : </ins> 500€<br>
            Type de chambre: <input type="radio" name="chambre" value="Simple"/> Simple  <input type="radio" name="chambre" value="Double"> Double <br>
            Si vous avez pris une Suite: <input type="radio" name="suite" value="2 personnes"/> : 2 personnes <input type="radio" name="suite" value="3 personnes"/> : 3 personnes <br>
            Options:<br>
            Baignoire <input type="checkbox" name="Baignoire" value="Baignoire"/> Balcon <input type="checkbox" name="Balcon" value="Balcon"><br>
            Mini bar <input type="checkbox" name="Minibar" value="MiniBar"/> Télévision <input type="checkbox" name="Tele" value="Télévision"><br>
            <input type="submit" value="Réserver"/>
        </form>
    </body>
</html>
