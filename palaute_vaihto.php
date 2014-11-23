<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin
$nimi = $_POST['var'];
$palaute = $_POST['var2'];
$kylla = "kylla";


if ($palaute == $kylla){
	mysql_query ("UPDATE koulutus SET palaute='ei' WHERE koulutuksennimi='$nimi'");
} 
 else {
	mysql_query ("UPDATE koulutus SET palaute='kylla' WHERE koulutuksennimi='$nimi'");
}





// suljetaan yhteys
mysql_close();

header("Location: kaikki_koulutukset.php"); /* Redirect browser */
exit();
?>