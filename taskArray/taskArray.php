<?php
    //平均年収配列の作成
    $averageSalaryArray = [
        2018 => 4410000,
        2017 => 4320000,
        2016 => 4220000,
        2015 => 4200000,
        2014 => 4150000,
    ];
    //平均年収の計算
    $averageSalary = array_sum($averageSalaryArray) / count($averageSalaryArray);

    //平均点数配列の作成
    $averageScoreArray = [
        "A" => 80,
        "B" => 55,
        "C" => 61,
        "D" => 76,
        "E" => 34,
        "F" => 93,
    ];

    //平均点の計算
    $averageScore = array_sum($averageScoreArray) / count($averageScoreArray);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskArray</title>
</head>
<body>
    <p><?php 
        echo("課題1<br>1.<br><pre>");
        var_dump($averageSalaryArray);
        echo("</pre>");
        echo("2.<br>平均年収: $averageSalary");
    ?></p>
    <p><?php
        echo("課題2<br>1.<br><pre>");
        var_dump($averageScoreArray);
        echo("</pre>");
        echo("2.<br>平均点数: $averageScore");
    ?></p>
</body>
<body>
</body>
</html>