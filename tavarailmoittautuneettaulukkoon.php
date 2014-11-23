<?php

//sisällytetään yhteystidot
include 'yhteys.php';




// tallennetaan postatut tiedot variableihin
$nimi = $_POST['var2'];
$yritys = $_POST['yritys'];
$ajankohta = $_POST['ajankohta'];
$omanimi = $_POST['nimi'];
$sukupuoli = $_POST['sukupuoli'];
$henkilomaara = $_POST['henkilomaara'];
$ika = $_POST['ika'];
$ammatti = $_POST['ammatti'];




// viedään $nimi variableen tallennettu tieto koulutustaulukkoon tietueeseen koulutuksen nimi
$sql = "INSERT INTO ilmoittautuneet (
		koulutuksennimi,
		yritys,
		ajankohta,
		nimi,
		sukupuoli,
		henkilomaara,
		ika,
		ammatti
		) VALUES ('$nimi','$yritys','$ajankohta','$omanimi','$sukupuoli','$henkilomaara','$ika','$ammatti')";
		



// ilmoitus jos vienti epäonnistui
if (!mysql_query($sql)) {
    die("error: " . mysql_error());
} 
echo "Tiedot vietiin tietokantaan";


// suljetaan yhteys
mysql_close();
?>