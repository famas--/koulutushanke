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
<td>Ilmoittautuminen p&auml;&auml;ttyy:</td> <td><input type="datetime-local" name="ilmoittautuminen"></td><tr>
<td>Ryhm&auml;n koko: </td> <td><input type="text" name="ryhmankoko" size="40"></td><tr>
<td>Koulutuksen toteuttaja: </td><td><input type="text" name="toteuttaja" size="40"></td><tr>
<td>Yhteyshenkil&oumln s&auml;hk&oumlposti:</td> <td><input type="text" name="email" size="40"></td><tr>
<td>Yhteyshenkil&oumln puhelin: </td> <td><input type="text" name="puh" size="40"></td><tr>
<td>Koulutuksen kesto: </td> <td><input type="text" name="kesto" size="40"></td><tr>
<td>Koulutuksen hinta: </td> <td><input type="text" name="hinta" size="40"></td><tr>
<td>Koulutuksen kuvaus: </td> <td><textarea type="text" rows="10" cols="50" name="kuvaus"></textarea></td><tr>
</table>
<input type="submit" value="Tallenna tietokantaan">
</form>

</body>
</html>