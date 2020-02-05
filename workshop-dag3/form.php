<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php

$namn = $_GET['namn'];
echo "<h1> ". $namn  ." </h1>";


if (isset($_POST['submit'])) {
$namn = $_POST['namn'];
echo "<h1> Hej, ". $namn  ." </h1>";
}


?>

<form method="GET" action="form.php">

  <input type="text" name="namn" id="namn" value=""/>
  <input type="submit" name="submit" value="tjo"/>



</form>
<form method="POST" action="form.php">

  <input type="text" name="namn" id="namn" value=""/>
  <input type="submit" name="submit" value="tjo"/>



</form>



</body>
</html>