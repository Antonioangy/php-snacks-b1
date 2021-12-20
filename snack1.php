<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- snack 1 -->
    <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
    e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <?php
        $partite = [
            [
                "casa" => "Olimpia Milano",
                "ospiti" => "Cantù",
                "puntiCasa" => 70,
                "puntiOspiti" => 73
            ],
            [
                "casa" => "Roma",
                "ospiti" => "Torino",
                "puntiCasa" => 96,
                "puntiOspiti" => 82
            ],
            [
                "casa" => "Firenze",
                "ospiti" => "Verona",
                "puntiCasa" => 78,
                "puntiOspiti" => 79
            ],
        ];

        for($i = 0; $i < count($partite); $i++){
            echo $partite[$i]['casa'] . " - " . $partite[$i]['ospiti'] . " = " . $partite[$i]['puntiCasa'] . "-" . $partite[$i]['puntiOspiti'] . "<br>";
        }
    ?>
    
</body>
</html>