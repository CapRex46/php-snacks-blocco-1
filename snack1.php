<?php
        $matches = [
            [
                "casa" => "Fortitudo Bologna",
                "ospiti" => "Virtus Bologna",
                "ptcas" => "97",
                "ptosp" => "95"
            ],
            [
                "casa" => "Cremona",
                "ospiti" => "Brindisi",
                "ptcas" => "87",
                "ptosp" => "99"
            ],
            [
                "casa" => "Trento",
                "ospiti" => "Brescia",
                "ptcas" => "101",
                "ptosp" => "73"
            ],
            [
                "casa" => "Reggiana",
                "ospiti" => "Varese",
                "ptcas" => "110",
                "ptosp" => "93"
            ],
            [
                "casa" => "Dinamo Sassari",
                "ospiti" => "Napoli",
                "ptcas" => "99",
                "ptosp" => "100"
            ],
        ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PARTITE DELLA 19° GIORNATA</h1>
</body>
<?php for ($i = 0; $i < count($matches); $i++) { ?>
            <h3><?php echo "Partita " . ($i + 1) ?></h3>
            <?php echo $matches[$i]["casa"] ?>-<?php echo $matches[$i]["ospiti"] ?>  | 
            <?php echo $matches[$i]["ptcas"] ?>-<?php echo $matches[$i]["ptosp"] ?> <br>           
        <?php } ?>
</html>