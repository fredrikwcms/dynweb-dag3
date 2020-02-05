<!-- Connect to a specific database with PDO -->
<?php
// $servername = "localhost";
// $username = "root";
// $password = "mysql";
// $dbname = "pdo_test";

// try {
//     $conn = new PDO("mysql:host=$servername; $dbname, $username, $password");
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }
?>

<!-- Connect to MySQL Server and create a new database -->
<?php
// $servername = "localhost";
// $username = "root";
// $password = "mysql";

// try {
//     $conn = new PDO("mysql:host=$servername", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "CREATE DATABASE pdo_test";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Database created successfully<br>";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;
?>

<!-- Connect to specific DB and create table -->
<?php
// $servername = "localhost";
// $username = "root";
// $password = "mysql";
// $dbname = "pdo_test";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // sql to create table
//     $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     setting1 VARCHAR(30) NOT NULL,
//     userconfig VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Table MyGuests created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;
?>

<!-- Insert data into specific DB -->

<?php
// $servername = "localhost";
// $username = "root";
// $password = "mysql";
// $dbname = "asdf";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//     VALUES ('John', 'Doe', 'john@example.com')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "New record created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;
?>

<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "pdo_test";

try {
    $conn = new PDO("mysql:host=$servername; $dbname, $username, $password");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
