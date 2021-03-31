<?php
    /**
     * 表示を行う
     * 
     * @param  string $string
     * @return null
     */
    function display(string $string)
    {
        echo ('<p>' . $string . '</p>');
    }
    $parameter = 1000;

    //課題1 値渡し
    function divideQuarter(int $number): float
    {
        return $number / 4;
    }

    //課題2 参照渡し
    function divideQuarterReference(int &$number)
    {
        $number = $number / 4;
    }

    $number = 2000;
    $divideNumber = divideQuarter($number);

    $numberReference = 1000;
    divideQuarterReference($numberReference);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskHandOver</title>
</head>
<body>
    <p>
        <?php display($number . 'を4で割った値は' . (string)$divideNumber . 'です。（値渡し）'); ?>
        <?php display('1000を4で割った値は' . (string)$numberReference . 'です。（参照渡し）'); ?>
    </p>
</body>
<body>
</body>
</html>