<?php
    require_once("externalFunction.php");
    $number = 84;
    $calcNumber = 37;

    //各科目の平均点
    $averageScore = [
        'nationalLanguage' => 63,
        'math' => 67,
        'society' => 71,
        'science' => 68,
        'english' => 66,
    ];

    $AScore = [
        'nationalLanguage' => 76,
        'math' => 72,
        'society' => 65,
        'science' => 68,
        'english' => 80,
    ];

    $subjectTitle = [
        'nationalLanguage' => '国語',
        'math' => '数学',
        'society' => '社会',
        'science' => '理科',
        'english' => '英語',
    ];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
</head>
<body>
    <p>
        課題1
        <?php display("$number + $calcNumber = ". calcNumber($number, $calcNumber, )); ?>
        <?php display("$number - $calcNumber = ". calcNumber($number, $calcNumber, false)); ?>

        課題2
        <?php display("$number の2乗は ". $calcMultiplication($number, true)); ?>
        <?php display("$calcNumber の3乗は ". $calcMultiplication($calcNumber, false)); ?>

        課題3‐1
        <?php display("全科目の平均点は " . calcAverage($averageScore) . "点です。"); ?>
        <?php display("Aくんの平均点は " . calcAverage($AScore) . "点です。"); ?>

        課題3‐2
        <?php
            foreach(differenceArray($AScore, $averageScore) as $key => $value) {
                if($value > 0) {
                    display($subjectTitle[$key] . "は、平均点より" . $value . "点高いです。");
                } elseif($value < 0) {
                    display($subjectTitle[$key] . "は、平均点より" . abs($value) . "点低いです。");
                } else {
                    display($subjectTitle[$key] . "は、平均点と同じです。");
                }
            }
        ?>
    </p>
</body>
<body>
</body>
</html>