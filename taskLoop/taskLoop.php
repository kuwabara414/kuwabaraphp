<?php
    $fruitsTranslate = [
        'apple' => [
            'japanese' => 'りんご',
            'price' => 80,
        ],
        'orange' => [
            'japanese' => 'オレンジ',
            'price' => 120,
        ],
        'grape' => [
            'japanese' => 'ぶどう',
            'price' => 220,
        ],
    ];

    $studentScores = [
        'A' => [
            '国語' => 34,
            '数学' => 67,
            '社会' => 45,
            '理科' => 34,
            '英語' => 89,
            '平均' => 53.8,
        ],
        'B' => [
            '国語' => 76,
            '数学' => 72,
            '社会' => 65,
            '理科' => 77,
            '英語' => 80,
            '平均' => 74,
        ],
        'C' => [
            '国語' => 98,
            '数学' => 87,
            '社会' => 88,
            '理科' => 92,
            '英語' => 96,
            '平均' => 92.2,
        ],
        'D' => [
            '国語' => 65,
            '数学' => 34,
            '社会' => 71,
            '理科' => 56,
            '英語' => 76,
            '平均' => 60.4,
        ],
        'E' => [
            '国語' => 67,
            '数学' => 55,
            '社会' => 87,
            '理科' => 56,
            '英語' => 69,
            '平均' => 66.8,
        ],
        'F' => [
            '国語' => 81,
            '数学' => 79,
            '社会' => 74,
            '理科' => 82,
            '英語' => 85,
            '平均' => 80.2,
        ],
        '平均' => [
            '国語' => 70.2,
            '数学' => 65.7,
            '社会' => 71.7,
            '理科' => 66.2,
            '英語' => 82.5,
            '平均' => 71.2,
        ]
    ];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskLoop</title>
</head>
<body>
    <?php
    echo('課題1: ');
    foreach($fruitsTranslate as $key => $value) {
        echo('<p>英語では' . $key . 'と表示され、日本語では' . $value['japanese'] . '、価格は' . $value['price'] . '円です。</p>');
    }
    ?>
    <?php echo('課題2: '); ?>
    <table border="1">
        <tr>
            <td>名前</td>
            <td>国語</td>
            <td>数学</td>
            <td>社会</td>
            <td>理科</td>
            <td>英語</td>
            <td>平均</td>
        </tr>
        <?php foreach($studentScores as $key => $value) { ?>
        <tr>
            <td><?php echo($key) ?></td>
            <td><?php echo($value['国語']) ?></td>
            <td><?php echo($value['数学']) ?></td>
            <td><?php echo($value['社会']) ?></td>
            <td><?php echo($value['理科']) ?></td>
            <td><?php echo($value['英語']) ?></td>
            <td><?php echo($value['平均']) ?></td>
        <?php } ?> 
    </table>
</body>
<body>
</body>
</html>