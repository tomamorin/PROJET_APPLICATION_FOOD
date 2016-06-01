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

<h1>Choisir une formule</h1>
<?php
$page = null;
if(isset($_POST['page'])){
    $page = $_POST['page'];
}
?>
<div class="choix-formule">
    <p>Nombre de Personnes </p>
    <form name="myform" class="form-choix-formule" action="" method="post">
        <select name="page" class="select" onchange="this.form.submit()">
            <option value="page1"<?php if($page == "page1"){ echo " selected"; }?>>1 Personne</option>
            <option value="page2"<?php if($page == "page2"){ echo " selected"; }?>>2 Personnes</option>
            <option value="page3"<?php if($page == "page3"){ echo " selected"; }?>>3 Personnes</option>
            <option value="page4"<?php if($page == "page4"){ echo " selected"; }?>>4 Personnes</option>
        </select>
    </form>
</div>
<?php
switch($page){
    case 'page4': include_once('formule4.php'); break;
    case 'page3': include_once('formule3.php'); break;
    case 'page2': include_once('formule2.php'); break;
    case 'page1': include_once('formule1.php'); break;
    default: include_once('choixformule.php'); break;
}
?>

<footer></footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>

</body>
</html>