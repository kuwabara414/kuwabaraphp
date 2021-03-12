<?php
    $apple = 5;
    $stringTask2 = "string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\)が必要です。";
    $stringTask3 = 'I\'m Security Enginner'; 
    const GREETING_EVENING = "こんばんは";
    $name = "太郎くん";
    $const = function($c) { return $c; };
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskDataType</title>
</head>
<body>
    <p><?php echo("課題1: りんごが{$apple}個あります。"); ?></p>
    <p><?php echo("課題2: $stringTask2"); ?></p>
    <p><?php echo("課題3: $stringTask3"); ?></p>
    <p><?php echo("課題4: {$const(GREETING_EVENING)}、$name"); ?></p>
</body>
</html>