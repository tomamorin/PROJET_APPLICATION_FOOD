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

<div class="block block-inscrip">
    <h1>Inscription/Connexion</h1>
    <form name="form-code-postal" method="post" action="register2.php">
        <p class="form-inscrip">Nom/Prénom :</p>
        <input class="name" type="text" name="name">
        <p class="form-inscrip">Pseudo :</p>
        <input class="name" type="text" name="pseudo">
        <p class="form-inscrip">Email :</p>
        <input class="name" type="text" name="email">
        <p class="form-inscrip">Mot de passe :</p>
        <input class="name" type="password" name="password" maxlength="12" minlength="6">
        <input class="valid-inscrip" type="submit" name="valider" value="S'INSCRIRE">
    </form>
    <a href="connection.php" class="lien-inscrip"><h3>Je possède déjà un compte</h3></a>
</div>

<footer></footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>

</body>
</html>