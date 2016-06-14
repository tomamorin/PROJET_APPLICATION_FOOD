<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Titre</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="../medias/dw_viewport.js" type="text/javascript"></script>
</head>

<body>

<header></header>

<div class="center">
    <a href="recapitulatif-commande.php?prenom=Jean&">
        <div class="cercle">
            <p>Entrée</p>
            <p>Plats</p>
            <p>Desserts</p>
            <p>Boissons</p>
            <p>17€</p>
        </div>
    </a>
    <a href="recapitulatif-commande.php">
        <div class="cercle">
            <p>Entrée</p>
            <p>Plats</p>
            <p>Boissons</p>
            <p>15€</p>
        </div>
    </a>
</div>
<div class="center">
    <a href="recapitulatif-commande.php">
        <div class="cercle">
            <p>Plats</p>
            <p>Desserts</p>
            <p>Boissons</p>
            <p>14€</p>
        </div>
    </a>
    <a href="recapitulatif-commande.php">
        <div class="cercle">
            <p>Plats</p>
            <p>Boissons</p>
            <p>10€</p>
        </div>
    </a>
</div>


<footer></footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>

</body>
</html>