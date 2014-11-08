<?php

//yhteyksien määrittely
$servername = "localhost";
$username = "root";
$password = "";
$db = "koulutushanke";




// luo yhteys
$yhteys = mysql_connect($servername, $username, $password);




// tarkista yhteys
if (!$yhteys) {
    die("yhteys ei onnistunut: " . mysql_error());
} 



// valitse tietokanta
$tietokanta = mysql_select_db ($db, $yhteys);




// tarkista yhteys tietokantaan
if (!$tietokanta) {
    die("yhteys tietokantaan ei onnistunut: " . mysql_error());
} 

// tallennetaan postattu tieto variableen
$nimi = $_POST['koulutuksennimi'];



// viedään $nimi variableen tallennettu tieto koulutustaulukkoon tietueeseen koulutuksen nimi
$sql = "INSERT INTO koulutus (koulutuksennimi) VALUES ('$nimi')";




// ilmoitus jos vienti epäonnistui
if (!mysql_query($sql)) {
    die("error" . mysql_error());
} 
echo "Tiedot vietiin tietokantaan";

// suljetaan yhteys
mysql_close();
?>