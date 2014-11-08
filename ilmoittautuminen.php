<?php

//sisällytetään yhteystidot
include 'yhteys.php';

<!DOCTYPE html>
<html>
<body>

<form action="tavarakoulutustaulukkoon.php" method="post"/>
<table>
<tr>
<td>Koulutuksen nimi:</td> <td><input type="text" name="koulutuksennimi" size="40"></td><tr>
<td>Paikka: </td> <td><input type="text" name="paikka" size="40"></td><tr>
<td>Aloitusaika: </td> <td><input type="datetime-local" name="aloitusaika" ></td><tr>
<td>Lopetusaika: </td> <td><input type="datetime-local" name="lopetusaika"></td><tr>
<td>Ilmoittautuminen p&auml;&auml;ttyy:</td> <td><input type="datetime-local" name="ilmoittautuminen paattyy"></td><tr>
<td>Ryhm&auml;n koko: </td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Koulutuksen toteuttaja: </td><td><input type="text" name="koulutuksen toteuttaja" size="40"></td><tr>
<td>Yhteyshenkil&oumln s&auml;hk&oumlposti:</td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Yhteyshenkil&oumln puhelin: </td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Koulutuksen kesto: </td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Koulutuksen hinta: </td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Koulutuksen kuvaus: </td> <td><textarea rows="10" cols="50" name="Koulutuksen toteuttaja" form="usrform"></textarea></td><tr>
</table>
<input type="submit" value="Tallenna tietokantaan">
</form>

</body>
</html>

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



