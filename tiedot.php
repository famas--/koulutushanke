<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin
$nimi = $_POST['var'];

$sql = mysql_query ("SELECT * FROM koulutus WHERE koulutuksennimi = '$nimi'");
	while($tieto = mysql_fetch_array ($sql)){
		
		echo "<table><tr>
		<td>Koulutus</td><td>" . $tieto['koulutuksennimi'] . "</td></tr>
		<td>Paikka</td><td>" . $tieto['paikka'] . "</td></tr>
		<td>Alkaa</td><td>" . $tieto['aloitusaika'] . "</td></tr>
		<td>Loppuu</td><td>" . $tieto['lopetusaika'] . "</td></tr> 
		<td>Ilmoittautuminen paattyy</td><td>" . $tieto['ilmoittautuminen'] . "</td></tr>
		<td>Ryhman koko</td><td>" . $tieto['ryhmankoko'] . "</td></tr>
		<td>Toteuttaja</td><td>" . $tieto['toteuttaja'] . "</td></tr>
		<td>Yhteyshenkilon sahkopostiosoite</td><td>" . $tieto['email'] . "</td></tr>
		<td>Yhteyshenkilon puhelinnumero</td><td>" . $tieto['puh'] . "</td></tr>
		<td>Koulutuksen kesto</td><td>" . $tieto['kesto'] . "</td></tr>
		<td>Hinta</td><td>" . $tieto['hinta'] . "</td></tr>
		<td>Kuvaus</td><td>" . $tieto['kuvaus'] . "</td></tr>
		
		</table>"; 
		
		
	}



// suljetaan yhteys
mysql_close();
?>