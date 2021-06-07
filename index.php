<?php

$submit = filter_input (INPUT_POST, 'submit');

$model = filter_input (INPUT_POST,"model");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autosalon</title>
</head>
<body>
<?php
if(isset($submit)) {
  echo "Formulář byl odeslán <br>";

} else { ?>
<form action= "index.php" method="post">

<h1>Autosalon</h1>

<label for="cars">Vyber model:</label>
<select name="cars" id="cars">
  <option value="felicie">Felicie</option>
  <option value="octavia">Octavia</option>
  <option value="fabie">Fabie</option>
  <option value="kodiaq">Kodiaq</option>
  <option value="superb">Superb</option>
  <option value="scala">Scala</option>
<br>  
<input type="radio" id="benzin" name="palivo" value="benzin">
<label for="benzin">Benzín </label>
<input type="radio" id="diesel" name="palivo" value="diesel">
<label for="diesel">Diesel</label>
<input type="radio" id="LPG" name="palivo" value="LPG">
<label for="LPG">LPG</label>
<input type="radio" id="elektro" name="palivo" value="elektro">
<label for="elektro">Elektro</label>
<input type="radio" id="hybrid" name="palivo" value="hybrid">
<label for="hybrid">Hybrid</label>
<br>
<input type="checkbox" id="genre1" name="genres[]" value="Lékárnička">
<label for="lekarnicka"> Lékárnička</label>
<input type="checkbox" id="genre1" name="genres[]" value="Vesta">
<label for="vesta"> Vesta</label>
<input type="checkbox" id="genre2" name="genres[]" value="Hasičák">
<label for="hasicak"> Hasičák</label>
<input type="checkbox" id="genre3" name="genres[]" value="Páska">
<label for="paska"> Páska</label>
<input type="checkbox" id="genre4" name="genres[]" value="Trojúhelník">
<label for="trojuhelnik"> Trojúhelník</label>
<input type="checkbox" id="genre5" name="genres[]" value="Sada">
<label for="sada"> Sada</label>
<input type="checkbox" id="genre6" name="genres[]" value="Světla">
<label for="svetla"> Světla</label>
<br>
<label for="barvy">Barva:</label>
<select name="barvy" id="barvy">
  <option value="modra">Modrá</option>
  <option value="zelena">Zelená</option>
  <option value="cervena">Červená</option>
  <option value="cerna">Černá</option>
  <option value="bila">Bílá</option>
  <option value="hneda">Hnědá</option>
  <br>
</select>
<br>
<input type= "submit" value="Odeslat" name="submit">

</form>
<?php } ?>
</body>
</html> 