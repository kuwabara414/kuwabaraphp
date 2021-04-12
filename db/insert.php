<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert</title>
</head>
<body>
    課題1
    <p><?php
        echo('INSERT INTO country (name, area, lang, number) VALUES (\'日本\', \'アジア\', \'日本語\', 81);<br>
            INSERT INTO country (name, area, lang, number) VALUES (\'イタリア\', \'ヨーロッパ\', \'イタリア語\', 39);<br>
            INSERT INTO country (name, area, lang, number) VALUES (\'アメリカ合衆国\', \'北アメリカ\', \'英語\', 1);<br>
            INSERT INTO country (name, area, lang, number) VALUES (\'フランス\', \'ヨーロッパ\', \'フランス語\', 33);<br>
            INSERT INTO country (name, area, lang, number) VALUES (\'イギリス\', \'ヨーロッパ\', \'英語\', 44);<br>'
            );
    ?></p>

    課題2
    <p><?php
        echo('INSERT INTO heritage (name, country_id, type) VALUES (\'自由の女神像\', 3, \'文化\');<br>
            INSERT INTO heritage (name, country_id, type) VALUES (\'小笠原諸島\', 1, \'自然\');<br>
            INSERT INTO heritage (name, country_id, type) VALUES (\'姫路城\', 1, \'文化\');<br>
            INSERT INTO heritage (name, country_id, type) VALUES (\'ロンドン塔\', 5, \'文化\');<br>
            INSERT INTO heritage (name, country_id, type) VALUES (\'ナポリ歴史地区\', 2, \'文化\');<br>
            INSERT INTO heritage (name, country_id, type) VALUES (\'富士山\', 1, \'自然\');<br>
            INSERT INTO heritage (name, country_id, type) VALUES (\'ヴェルサイユの宮殿と庭園\', 4, \'文化\');<br>'
            );
    ?></p>
</body>
</html>