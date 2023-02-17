<?php

$connexion = mysqli_connect(
    "localhost", // serveur
    "root",      // login mysql sur serveur
    "root",      // mot de passe mysql
    "starwars"       // nom base de données
);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starwarspedia</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
</head>
<body>
    <div id="work">
    <video autoplay muted loop id="myVideo"><source src="img/back.mp4" type="video/mp4"></video>
        <div class="projets">
            <h2>Planètes</h2>
            <a class="link_alderaCity" href="aldera.php"><img class="alderaCity" src="img/Aldera_City.png"></a>
            <a class="link_bespin" href="bespin.php"><img class="bespin" src="img/Bespin.png"></a>
            <a class="link_coruscant" href="coruscant.php"><img class="coruscant" src="img/Coruscant.jpg"></a>
            <a class="link_dagobah" href="dagobah.php"><img class="dagobah" src="img/Dagobah.jpg"></a>
            <a class="link_endor" href="endor.php"><img class="endor" src="img/Endor.jpg"></a>
            <a class="link_geonosis" href="geonosis.php"><img class="geonosis" src="img/Geonosis.jpeg"></a>
            <a class="link_hoths" href="hoths.php"><img class="hoths" src="img/hoths.jpg"></a>
            <a class="link_kamino" href="kamino.php"><img class="kamino" src="img/Kamino.png"></a>
            <a class="link_naboo" href="naboo.php"><img class="naboo" src="img/Naboo.png"></a>
            <a class="link_yavin" href="yavin.php"><img class="yavin" src="img/Yavin.jpg"></a>
        </div>
    </div>
</body>
</html>