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

<script src="js/jquery-2.2.4.min.js"></script>
<script>jQuery(window).load(function(){ jQuery(".loader").delay(4000).fadeOut(500); });</script>

    <header></header>

    <div class="loader">
        <img src="img/logo.png" alt="logo" class="logo">
    </div>

    <h1>METTRE LES PETITS PLATS DANS LES GRANDS</h1>

    <div class="block">
        <p>Code Postal :</p>
        <form name="form-code-postal" method="post" action="index2.php">
            <input class="postal" type="text" name="postal" maxlength="5" minlength="5">
            <input class="valid" type="submit" name="valider" value="COMMANDER">
        </form>
    </div>

    <footer></footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
