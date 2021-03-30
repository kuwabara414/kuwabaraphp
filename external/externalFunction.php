<?php
    //表示を行う関数
    function display(string $string)
    {
        echo("<p>". $string. "</p>");
    };

    //課題1
    function calcNumber(int $number, int $calcNumber, bool $isAdd = true): int
    {
        if($isAdd) {
            return $number + $calcNumber;
        } else {
            return $number - $calcNumber;
        }
    };

    //課題2
    $calcMultiplication = function(int $number, bool $isCube) {
        if($isCube == true){
            return $number * $number;
        } else {
            return $number * $number * $number;
        }
    };

    //課題3‐1
    //平均点の計算
    function calcAverage(array $score): float
    {
        $totalScore = 0;
        foreach ($score as $value) {
            $totalScore += $value;
        }
        return round($totalScore / count($score));
    };

    //課題3－2
    //平均点の差
    function differenceArray(array $score, array $averageScore): array
    {
        $differenceArray = [];
        foreach($score as $key => $value) {
            $differenceArray[$key] = $value - $averageScore[$key];
        }
        return $differenceArray;
    }

?>