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

<h1>CONNECTION</h1>

<div class="block">

    <form name="form-code-postal" method="post" action="paiement.php">
        <p class="form-inscrip">Mot de passe :</p>
        <input class="connection" type="text" name="pseudo" placeholder="identifiant">
        <p class="form-inscrip">Mot de passe :</p>
        <input class="connection" type="password" name="password" placeholder="mot de passe">
        <input class="valid" type="submit" name="valider" value="CONNECTION">
    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>

</body>
</html>