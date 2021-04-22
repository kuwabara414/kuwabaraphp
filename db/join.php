<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>join</title>
</head>
<body>
    課題1
    <p><?php
        echo('SELECT country.name, area, heritage.name FROM country INNER JOIN heritage ON country.id = heritage.id;<br>');
        echo('SELECT heritage.name, country.name FROM heritage INNER JOIN country ON heritage.country_id = country.id WHERE area = \'ヨーロッパ\';<br>');
        echo('SELECT heritage.name, country.name, number FROM heritage INNER JOIN country ON heritage.country_id = country.id WHERE number >= 40 AND type = \'文化\';<br>');
        echo('SELECT * FROM country LEFT JOIN heritage ON country.id = heritage.country_id WHERE type = \'自然\';');
    ?></p>
</body>
</html>