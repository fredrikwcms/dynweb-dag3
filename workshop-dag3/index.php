<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>First day of PHP!</title>
</head>
<body>

<h1>Php Dag ett!</h1>

<?php echo "<h2>heeej</h2>";?>



<h2><?php echo "heeeeej" ?></h2>
<h2><?php echo $html; ?></h2>

<?php 

$html = "";
$html = "<h2> hej hej hej hej</h2>";

$fnamn = "Marc";
$enamn = "larsson";

echo $fnamn .' '.  $enamn;

// $klassen = array('Eva', 'John', 'Birgitt', 'Derp');

echo $klassen[2];

$klassen[] = 'Bruno';

echo $klassen[4];

var_dump($klassen);

$klassen = array();
// Ex. på flerdimensionell array.
$klassen[] = array(fnamn => 'Eva', enamn => 'Svensson');
$klassen[] = array(fnamn => 'Derp', enamn => 'Olsson');
$klassen[] = array(fnamn => 'Mega', enamn => 'Man');




var_dump($klassen);

// echo $klassen[2]['fnamn'];  
// echo $klassen[2]['enamn'];  

foreach ($klassen as $student) {  // logiska namn för lättare förståelse
 echo $student['fnamn'] .' '. $student['enamn'] . "<br>" ;
}

// functions

function skrivut() {
  echo "hej hej!, jag skriver ut detta". "<br>";
}
skrivut();

function addera($x, $y) {
  $summa = $x + $y;
  echo $summa; // dont do dis.

}

addera(4, 3);

?>
  <h2><?php echo $html; ?></h2>
</body>
</html>


