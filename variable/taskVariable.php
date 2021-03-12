<?php
    $apple = 110;
    $orange = 80;
    const TAX = 0.1;
    $apple = $apple * 15;
    $orange = $orange * 12;
    $price = $apple + $orange;
    $priceInclTax = $price + $price * TAX;
    $floots = round($price / 27);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskVariable</title>
</head>
<body>
    <p><?php echo($apple); ?></p>
    <p><?php echo($orange); ?></p>
    <p><?php echo($price); ?></p>
    <p><?php echo($priceInclTax); ?></p>
    <p><?php echo($floots); ?></p>
</body>
<body>
</body>
</html>