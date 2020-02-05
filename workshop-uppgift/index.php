<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO?</title>
</head>
<body>
    <?php
    $welcometext = "<h1>Welcome to my PHP!</h1>";

    echo $welcometext;
    ?>

    <form action="insert.php" method="post">
        <label for="name">Enter your name:</label><br>
        <input type="text" name="name"><br>
        <label for="email">Enter your email:</label><br>
        <input type="email" name="email"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>