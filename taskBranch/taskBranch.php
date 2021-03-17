<?php
    $stringNumber = '100'; //文字列型の100
    $japanese = rand(1, 100); //国語
    $math = rand(1, 100);     //数学
    $science = rand(1, 100);  //理科
    $social = rand(1, 100);   //社会
    $english = rand(1, 100);  //英語
    $average = ($japanese + $math + $science + $social + $english) / 5; //Aくんの平均点
    $totalAverage = 67.3;  //全体の平均点
    $case = '1';  //文字列型の1
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
</head>
<body>
    <p><?php 
        echo("課題1‐1: ");
        if($stringNumber == 100) {  //課題1-1
            echo('$stringNumberは100です。');
        } else {
            echo('$stringNumberは100ではありません。');
        }
    ?></p>
    <p><?php 
        echo("課題1‐2: ");
        if($stringNumber === 100) {  //課題1-2
            echo('$stringNumberは数字の100です。');
        } else {
            echo('$stringNumberは数字の100ではありません。');
        }
    ?></p>
    <p><?php 
        echo("課題1‐3: ");
        if($stringNumber > 100) {  //課題1-3
            echo('$stringNumberは101以上です。');
        } else {
            echo('$stringNumberは101以上ではありません。');
        }
    ?></p>
    <p><?php 
        echo("課題1‐4: ");
        if($stringNumber >= 100) {  //課題1‐4
            echo('$stringNumberは100以上です。');
        } else {
            echo('$stringNumberは100以上ではありません。');
        }
    ?></p>
    <p><?php 
        echo("課題2‐1: Aくんの平均点は{$average}点です。");
    ?></p>
    <p><?php 
        echo("課題2‐2: ");
        if($average >= $totalAverage) { //Aくんの平均点と全体の平均点の比較
            echo("Aくんの平均点は{$totalAverage}以上です。");
        } else {
            echo("Aくんの平均点は{$totalAverage}未満です。");
        }
    ?></p>
    <p><?php 
        echo("課題3‐1: ");
        switch ($case) {
            case true:
                echo 'bool';
                break;
            
            case 1:
                echo 'int';
                break;
            
            case '1':
                echo 'string';
                break;
            
            default:
                echo 'other';
        }
    ?></p>
    <p><?php 
        echo("課題3‐2: ");
        switch ($case) {
            case $case === true:
                echo 'bool';
                break;
            
            case $case === 1:
                echo 'int';
                break;
            
            case $case === '1':
                echo 'string';
                break;
            
            default:
                echo 'other';
        }
    ?></p>
</body>
<body>
</body>
</html>