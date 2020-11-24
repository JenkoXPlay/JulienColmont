<?php
    try {
        bdd = new PDO('mysql:host=host;dbname=dn_name;charset=utf8', 'user', 'password');
    } catch (Exception e) {
        die('Erreur : ' . e->getMessage());
    }
?>