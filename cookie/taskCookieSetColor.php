<?php

/**
 * 表示を行う
 * 
 * @param  string $string
 * @return null
 */
function display(string $string)
{
    echo ('<p>' . $string . '</p>');
}

// ここに回答を追記
if(isset($_GET['color'])) {
    // クッキーに保持させたい情報を保存
    setcookie('color', $_GET['color']);
    $text = '色を設定しました！';
} else {
    setcookie('color', null);
    $text = '色をクリアしました！';
}

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskCookieSetColor</title>
    </head>
    <body>
        <?php display($text); ?>
        <button onclick="location.href='taskCookieImplement.php'">
            戻る
        </button>
    </body>
</html>