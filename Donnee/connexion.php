<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $usager = 'root';
    $motdepasse = 'julesalpha';
    $hote = 'localhost';
    $base = 'gameblexis';
    //$charset = 'utf8mb4'; // $charset = 'utf8';

    $dsn = "mysql:host=$hote;dbname=$base;";
    $basededonnees = new PDO($dsn, $usager, $motdepasse);