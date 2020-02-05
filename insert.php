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
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "asdf";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyUsers (name, email)
    VALUES (:username, :email)";

    $stmt = $conn->prepare($sql); 

    $stmt->bindParam(':username', $_POST["name"]);
    $stmt->bindParam(':email', $_POST["email"]);

    $stmt->execute();
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

    ?>
    <button></button>
</body>
</html>

