<?php

//yhteyksien määrittely
$servername = "localhost";
$username = "root";
$password = "";



// luo yhteys
$yhteys = mysql_connect($servername, $username, $password);



// tarkista yhteys
if (!$yhteys) {
    die("yhteys ei onnistunut: " . mysql_error());
} 

//tallennetaan tietokanta variableen
$db = "koulutushanke";

// valitse tietokanta
$tietokanta = mysql_select_db ($db, $yhteys);



// tarkista yhteys tietokantaan
if (!$tietokanta) {
    die("yhteys tietokantaan ei onnistunut: " . mysql_error());
} 

?>