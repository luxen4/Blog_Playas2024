<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $host = "localhost";
    $dbname = "blogplayas2024_db";
    $username = "root";
    $contrasena = "";


    /* Quitar este si falla */
} elseif ($_SERVER['SERVER_NAME'] == "laya.atwebpages.com") {
    $host = "fdb1030.awardspace.net";
    $dbname = "3714088_proyectoplayasdefinitivo";
    $username = "3714088_proyectoplayasdefinitivo";
    $contrasena = "rYPHq8acqd4Y";
} else {
    /*  la buena $host="fdb30.awardspace.net";
$dbname="3714088_proyectoplayas";
$username="3714088_proyectoplayas";
$contrasena="villamediana2";  */


    /* OK para awardspace.com
$host="fdb30.awardspace.net";
$dbname="4009740_proyectoplayas";
$username="4009740_proyectoplayas";
$contrasena="villamediana2";*/


    $host = "sql109.epizy.com";
    $dbname = "epiz_31803423_proyectoplayasdefinitivo";
    $username = "epiz_31803423";
    $contrasena = "rYPHq8acqd4Y";
}

try {
    $gbd = new PDO("mysql:host=$host;dbname=$dbname", $username, $contrasena);
    echo "Connected to at successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
//var_dump($datos['companiabus']);?>