<?php

//sisällytetään yhteystidot
include 'yhteys.php';

function query(){
	$koulutus = mysql_query ("SELECT koulutuksennimi FROM koulutus WHERE palaute='kylla'");
	while($tieto = mysql_fetch_array ($koulutus)){
		echo '<option value="' . $tieto['koulutuksennimi'] . '">' . $tieto['koulutuksennimi'] . '</option>';
	}
}


?>