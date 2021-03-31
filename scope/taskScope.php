<?php
    //ﾃﾞｨｽﾌﾟﾚｲに表示
    function display(string $string)
    {
        echo ('<p>' . $string . '</p>');
    }

    //ランダムな数値を追加
    function randomRecursiveCalc(int $limitCount): array
    {
        static $count = 0;
        static $total = 0;
        static $randomNumberArray = [];
        $randomNumber = rand(1, 100);
        $total += $randomNumber;
        $randomNumberArray[] = $randomNumber;
        $count++;
        if($count < $limitCount) {
            randomRecursiveCalc($limitCount);
        }
        return [
            $total,
            $randomNumberArray,
        ];
    }
    $limitCount = rand(1, 15);
    list($total, $randomNumberArray) = randomRecursiveCalc($limitCount);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskScope</title>
</head>
<body>
    <?php display("処理回数: " . $limitCount); ?>
    <table>
        <tr>
            <th>回</th>
            <th>数値</th>
        </tr>
    <?php 
        foreach($randomNumberArray as $key => $value) {
            echo('<tr>');
            echo('<td>' . ($key + 1) . '</td>');
            echo('<td>' . $value . '</td>');
            echo('</tr>');
        }
    ?>
    <tr>
        <td>合計</td>
        <td><?php echo($total); ?></td>
    </tr>
</body>
<body>
</body>
</html>