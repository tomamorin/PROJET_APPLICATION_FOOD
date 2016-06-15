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

<div class="verification">
    <?php
    $card = $_POST['card'];
    if(empty($card)) {
        echo "Vous n'avez pas renseigné les champs indiqués.";
        echo "<a href=\"paiement.php\"><div class=\"retour\">RETOUR</div></a>";
    } else {
        echo "Vous avez choisi le paiement par " . $card . ".";
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