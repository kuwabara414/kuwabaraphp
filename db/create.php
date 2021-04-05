<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>db</title>
</head>
<body>
    課題1
    <p><?php
        echo('CREATE TABLE country (<br>
            id int AUTO_INCREMENT PREPARE KEY,<br>
            name varchar(20) not null,<br>
            area varchar(10),lang varchar(10) DEFAULT \'英語\',<br>
            number int not null DEFAULT 0<br>
            );'
            );
    ?></p>

    課題2
    <p><?php
        echo('CREATE TABLE heritage(<br>
            id int AUTO_INCREMENT PRIMARY KEY,<br>
            name varchar(20) not null,<br>
            country_id int not null,<br>
            type varchar(2) not null<br>
            );'
            );
    ?></p>
</body>
</html>