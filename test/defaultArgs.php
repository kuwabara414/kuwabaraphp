<?php
    function concatenate(string $firstName, $lastName, string $space): string
    {
        return $lastName.$space.$firstName;
    }

    $lastName = "太郎";
    $firstName = "山田";
    $name1 = concatenate($firstName, $lastName, " ");
    echo("半角スペースで結合: ".$name1);
    $name2 = concatenate($firstName, $lastName, "");
    echo("<br>スペースなしで結合: ".$name2);
?>