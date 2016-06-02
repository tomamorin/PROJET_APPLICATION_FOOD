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
<h1>METTTEZ LES PETITS PLATS DANS LES GRANDS</h1>
<div class="verification">
    <?php
    $postal = $_POST['postal'];
    if (empty($postal)) {
        echo "Vous n'avez pas renseigné le champ indiqué.";
        echo "<a href=\"index.php\"><div class=\"retour\">RETOUR</div></a>";
    } else {
        if (is_numeric($postal)) {
            echo "Il est possible de vous livrer dans le " . $postal . " .";
            echo "<a href=\"categorie.php\"><div class=\"valid\">POURSUIVRE</div></a>";
        } else {
            echo "Votre code postal ne doit être composé uniquement de chiffres";
            echo "<a href=\"index.php\"><div class=\"retour\">RETOUR</div></a>";
        }
    }
    ?>
</div>

<footer></footer>
<!--<script>
    $(document).ready(function() {
        $("form-code-postal").on('submit', function(){
            $(this).remove(); // Pour supprimer du DOM
            });
        });
</script>-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>

</body>
</html>

