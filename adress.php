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
<body onload="initialize()">

<div id="map_canvas"></div>
<div id="back2">
    <div style="color: black;padding-top: 10%;text-align: center">
        <?php
    $card = $_POST['card'];
        echo "Vous avez choisi le paiement par " . $card . ".";
    ?>
        </div>
<h2 class="titre">Adresse :</h2><p align="center" style="font-size: 20px;">12 Avenue Léonard de Vinci<br>92400 Courbevoie</p>
    <a href="final.php"><div class="valid">VALIDER</div></a>
</div>











<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
    function initialize() {
        map = new google.maps.Map(document.getElementById("map_canvas"), {
            zoom: 19,
            center: new google.maps.LatLng(48.858565, 2.347198),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
    }

    if (navigator.geolocation)
        var watchId = navigator.geolocation.watchPosition(successCallback,
            null,
            {enableHighAccuracy:true});
    else
        alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");

    function successCallback(position){
        map.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
            map: map
        });
    }
</script>

</body>
</html>