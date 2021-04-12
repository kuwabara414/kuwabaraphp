<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>select</title>
</head>
<body>
    課題1
    <p><?php
        echo('SELECT name, area FROM country WHERE area = \'ヨーロッパ\';<br>');
        echo('SELECT name, area FROM country WHERE area != \'ヨーロッパ\';<br>');
        echo('SELECT name, lang FROM country WHERE lang = \'英語\';<br>');
        echo('SELECT name, area, lang FROM country WHERE area = \'ヨーロッパ\' AND lang = \'英語\';<br>');
        echo('SELECT * FROM country WHERE area = \'ヨーロッパ\' OR number < 40;<br>');
    ?></p>

    課題2
    <p><?php
        echo('SELECT name FROM country WHERE name LIKE \'イ%\';<br>');
        echo('SELECT name FROM country WHERE name LIKE \'%ス\';<br>');
        echo('SELECT * FROM heritage WHERE country_id IN (1, 3);<br>');
        echo('SELECT * FROM heritage WHERE country_id NOT IN (1, 3);<br>');
        echo('SELECT * FROM heritage WHERE type = \'文化\' ORDER BY country_id;<br>');
        echo('SELECT * FROM heritage ORDER BY country_id, id DESC;<br>');
    ?></p>
</body>
</html>