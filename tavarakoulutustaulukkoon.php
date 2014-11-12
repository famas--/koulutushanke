<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin
$nimi = $_POST['koulutuksennimi'];
$paikka = $_POST['paikka'];
$aloitusaika = $_POST['aloitusaika'];
$lopetusaika = $_POST['lopetusaika'];
$ilmoittautuminen = $_POST['ilmoittautuminen'];
$ryhmankoko = $_POST['ryhmankoko'];
$toteuttaja = $_POST['toteuttaja'];
$email = $_POST['email'];
$puh = $_POST['puh'];
$kuvaus = $_POST['kuvaus'];
$kesto = $_POST['kesto'];
$hinta = $_POST['hinta'];



// viedään $nimi variableen tallennettu tieto koulutustaulukkoon tietueeseen koulutuksen nimi
$sql = "INSERT INTO koulutus (
		koulutuksennimi,
		paikka,
		aloitusaika,
		lopetusaika,
		ilmoittautuminen,
		ryhmankoko,
		toteuttaja,
		email,
		puh,
		kuvaus,
		kesto,
		hinta
		) VALUES ('$nimi','$paikka','$aloitusaika','$lopetusaika','$ilmoittautuminen','$ryhmankoko','$toteuttaja','$email','$puh','$kuvaus','$kesto','$hinta')";
		



// ilmoitus jos vienti epäonnistui
if (!mysql_query($sql)) {
    die("error: " . mysql_error());
} 
echo "Tiedot vietiin tietokantaan";


// suljetaan yhteys
mysql_close();
?>