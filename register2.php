<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Titre</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<header></header>

<h1>METTRE LES PETITS PLATS DANS LES GRANDS</h1>
<div class="verification">
    <?php
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['pseudo'])) {
        echo "Vous n'avez pas renseigné les champs indiqués.";
        echo "<a href=\"register.php\"><div class=\"retour\">RETOUR</div></a>";
    } else {
        echo "Vous venez de vous inscrire sur Saveurs Mysteres, vous allez recevoir un email de confirmation dans quelques instants.";
        echo "<a href=\"connection.php\"><div class=\"valid\">POURSUIVRE</div></a>";
    }
    ?>
</div>

<footer></footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>