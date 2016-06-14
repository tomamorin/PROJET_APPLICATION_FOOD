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

<h1>Votre commande</h1>

<div class="recap-commande">
    <div class="ligne-tableau">
        <h5 class="produit">Quantité</h5>
        <h5 class="quantite">Produit</h5>
        <h5 class="no-padding prix">Prix</h5>
    </div>
    <div class="resultat">
        <h6 class="quantite"><?php echo $_GET['qentrees']; ?></h6>
        <h6 class="type"><?php echo $_GET['entree']; ?></h6>
    </div>
    <div class="resultat">
        <h6 class="quantite"><?php echo $_GET['qplats']; ?></h6>
        <h6 class="type"><?php echo $_GET['plat']; ?></h6>
    </div>
    <div class="resultat">
        <h6 class="quantite"><?php echo $_GET['qdesserts']; ?></h6>
        <h6 class="type"><?php echo $_GET['dessert']; ?></h6>
    </div>
    <div class="resultat">
        <h6 class="quantite"><?php echo $_GET['qboissons']; ?></h6>
        <h6 class="type"><?php echo $_GET['boisson']; ?></h6>
    </div>
    <div class="resultat-prix">
        <h6>TOTAL TTC</h6>
        <h6><?php echo $_GET['prix']; ?></h6>
    </div>
</div>

<footer></footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>

</body>
</html>