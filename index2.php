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
    echo "Nous sommes capable de vous livrer dans le".$postal.".";
    ?>
</div>
<a href="categorie.php"><div class="valid">POURSUIVRE</div></a>

<footer></footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>

</body>
</html>

