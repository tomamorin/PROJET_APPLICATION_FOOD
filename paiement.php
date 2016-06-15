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

<h1>Mode de Paiement</h1>
<div class="verification">
    <div class="paiement">
    <?php
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    if(empty($_POST['pseudo']) || empty($_POST['password'])) {
        echo "Vous n'avez pas renseigné les champs indiqués.";
        echo "<a href=\"register.php\"><div class=\"retour\">RETOUR</div></a>";
    } else {
        echo "Bienvenue " . $pseudo . ".";
        echo "<form method=\"post\" action=\"adress.php\">
   <p>Veuillez indiquer votre mode de paiement<br />
       <input type=\"radio\" name=\"card\" value=\"carte bleue\" id=\"cartebleue\" />
       <label for=\"moins15\">Carte Bleue</label><br />
       <input type=\"radio\" name=\"card\" value=\"master card\" id=\"mastercard\" />
       <label for=\"medium15-25\">Carte MasterCard</label><br />
       </div>
       <input class=\"valid\" type=\"submit\" name=\"valider\" value=\"VALIDER\">
   </p>
</form>";
    }
    ?>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>

</body>
</html>