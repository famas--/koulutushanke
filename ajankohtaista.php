<?php

//sisällytetään yhteystidot
include 'yhteys.php';



$sql = "SELECT koulutusid, koulutuksennimi FROM koulutus";
$tulos = mysql_query($tietokanta . $sql);

if ($tulos->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Koulutus</th></tr>";
     // output data of each row
     while($row = $tulos->fetch_assoc()) {
         echo "<tr><td>" . $row["koulutusid"]. "</td><td>" . $row["koulutuksennimi"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "tuloksia 0";
}

$tietokanta->close();
?>  
