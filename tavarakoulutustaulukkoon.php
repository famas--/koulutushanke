<?php

//sisällytetään yhteystidot
include 'yhteys.php';




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