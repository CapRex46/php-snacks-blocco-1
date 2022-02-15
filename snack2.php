<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $ageverify = $_GET["age"];

    if (strlen($name) > 3 && strpos($email, "@") && strpos($email, ".") && is_numeric($ageverify)) {
        echo "<h1>Benvenuto " . $name . "!</h1>";
    } else {
        echo "<h1>ACCESSO NEGATO</h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
</body>
</html>