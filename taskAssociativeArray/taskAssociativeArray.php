<?php
    $scores = [
        "A君" => [
            "国語" => 85,
            "数学" => 64,
            "社会" => 45,
            "理科" => 77,
            "英語" => 80,
        ],
        "B君" => [
            "国語" => 56,
            "数学" => 89,
            "社会" => 73,
            "理科" => 85,
            "英語" => 78,
        ],
        "C君" => [
            "国語" => 98,
            "数学" => 87,
            "社会" => 88,
            "理科" => 92,
            "英語" => 96,
        ],
    ];

    $averageScoreOfA = array_sum($scores["A君"]) / count($scores["A君"]); //A君の平均点
    $averageScoreOfC = array_sum($scores["C君"]) / count($scores["C君"]); //C君の平均点
    $averageScoreOfMath = array_sum(array_column($scores, "数学")) / count($scores);   //3人の数学の平均点
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAssociativeArray</title>
</head>
<body>
    <p><?php echo("1. A君の理科の点数: " . $scores["A君"]["理科"]); ?></p>
    <p><?php echo("2. B君の英語の点数: " . $scores["B君"]["英語"]); ?></p>
    <p><?php echo("3. A君の平均点: " . $averageScoreOfA); ?></p>
    <p><?php echo("4. C君の平均点: " . $averageScoreOfC); ?></p>
    <p><?php echo("5. 3人の数学の平均点: " . $averageScoreOfMath); ?></p>
</body>
<body>
</body>
</html>