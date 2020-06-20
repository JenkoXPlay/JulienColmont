<?php
// Script anti-vol
$navigateur = $_SERVER["HTTP_USER_AGENT"];
$bannav = Array('HTTrack','httrack','wget'); // Si le navigateur contient un de ces mots, on le bannit
foreach ($bannav as $banni) {
    $comparaison = strstr($navigateur, $banni);
    if ($comparaison !== false) {
        echo "Tu as besoins d'aide pour voler le site de Julien Colmont ? Mais merci pour ton adresse IP, une plainte sera déposée prochainnement :) Bonne journée à vous !";
        exit;
    }
}
?>

<?php include('connect.php'); ?>

<html>
    <head>
        <title>Julien Colmont - Graphiste</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/css/style.css" />
    </head>
    <body>

        <div id="scrollTop">
            <img src="/img/fleche.svg" id="fleche" />
        </div>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/scroll.js"></script>

        <?php include('includes/menu.php') ?>