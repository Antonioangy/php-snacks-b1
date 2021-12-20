<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = [];
    $MAX_LENGTH = 15;


    while (count($array) < $MAX_LENGTH) {

        $number = rand(1, 20);

        if (!in_array($number, $array)) {
            array_push($array, $number);
        }
    }
    
    echo implode('-', $array);
        
    ?>
</body>
</html>