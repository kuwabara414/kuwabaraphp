<?php
    function display(string $str) 
    {
        echo($str. "<br>");
    };

    function createRandomNumberArray()
    {
        for($i = 0; $i < 10; $i++) {
            $randomArray1[$i] = rand(1, 100);
        }
        return $array1 = $randomArray1;
    };

    function createRandomNumberArrayAndDisplay()
    {
        for($i = 0; $i < 10; $i++) {
            $randomArray2[$i] = rand(1, 100);
            display($i. "番目の数値: ". $randomArray2[$i]);
        }
        return  $array2 = $randomArray2;
    };

    $data = [
        47,
        31,
        86,
        16,
        39,
        53,
        94,
        3,
        74,
        28,
    ];

    function numberArrayCalcAndDisplay(array $array)
    {
        $num = 0;
        echo("計算式は ");
        foreach($array as $key => $value) {
            if($value <= 80) {                //80未満は足し80以上は引く
                $num = $num + $value;
                if($key != 0) {               //配列の1番目じゃないとき
                    echo(" + ". $value);
                } else {
                    echo("$value");
                }
            } else {
                $num = $num - $value;
                if($key != 0) {               //配列の1番目じゃないとき
                    echo(" - ". $value);
                } else {
                    echo("$value");
                }
            }
        }
        return $num;
    };

    function numberAverageCalc(array $array, int $int = 0)
    {
        return $num = round(array_sum($array) / count($array), $int);
    }

    function numberCompare(array $array, int $int)
    {
        $count = 0;
        foreach($array as $value) {
            if($value >= $int) {
                $count++;
            }
        }
        return $count;
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskFunc</title>
</head>
<body>
    課題1
    <p><?php display("関数で文字列を表示!"); ?></p>
    <p><?php display("254 × 322 = 81788"); ?></p>

    課題2
    <pre>
    <?php var_dump(createRandomNumberArray()); ?>
    </pre>

    課題3
    <p><?php createRandomNumberArrayAndDisplay(); ?></p>
    
    課題4
    <p><?php 
        $arrayCalcResult = numberArrayCalcAndDisplay($data);
        echo("<br>合計は{$arrayCalcResult}です！")
    ?></p>

    <p><?php
        $averageCalcResult1 = numberAverageCalc($data);
        echo("平均(小数点第1位は四捨五入)は". $averageCalcResult1. "です！<br>");
        $averageCalcResult2 = numberAverageCalc($data, 1);
        echo("平均(小数点第2位は四捨五入)は". $averageCalcResult2. "です！");
    ?></p>

    <p><?php
        $numberCompareResult = numberCompare($data, $averageCalcResult1);
        echo("平均以上は". $numberCompareResult. "個です！");
    ?></p>
</body>
<body>
</body>
</html>