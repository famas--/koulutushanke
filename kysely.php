
<?php

//sisällytetään yhteystidot
include 'yhteys.php';


$sql1 = mysql_query("SELECT koulutusid, ilmoittautuminen FROM koulutus");
while($tulos1 = mysql_fetch_array($sql1))


$sql = mysql_query("SELECT koulutuksennimi FROM koulutus WHERE ilmoittautuminen >= CURTIME()");
while($tulos = mysql_fetch_array($sql))
{
	
	echo "<table>";
	echo "<form action=\"testi3.php\" method=\"POST\"><tr><td><button onclick=\"testi()\">Tiedot</button></td><td>" . $tulos['koulutuksennimi'] . "</td></tr></form>";
	echo "</table>";
}




?>  
