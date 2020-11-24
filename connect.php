<?php
    try {
        $bdd = new PDO('mysql:host=localhost:3306;dbname=julienco_site;charset=utf8', 'julienco_user', 'Password2Merde');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>