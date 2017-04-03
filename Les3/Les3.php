<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les3</title>
</head>
<body>


</body>
</html>

<?php

$str = 'This is some text. I will be using PHP string functions to change it';
$str_lower = strtolower($str );
$str_camel = ucwords($str);
$str_first = ucfirst($str);
$str_strrev = strrev($str);
$str_toupper = strtoupper($str);
$str_shuffle = str_shuffle($str);
$str_word_count = str_word_count($str);
$str_strlen = strlen($str);


echo '<b> output: </b>';
echo '<p>' . $str_lower . '</p>';
echo '<p>' . $str_camel . '</p>';
echo '<p>' . $str_first . '</p>';
echo '<p>' . str_replace("PHP", "HTML" ,"This is some text. I will be using PHP string functions to change it") . '</p>';
echo '<p>' . $str_strrev . '</p>';
echo '<p>' . $str_toupper . '</p>';
echo '<p>' . $str_shuffle . '</p>';

echo '<b> The number of words in the string: </b>';
echo '<p>' . $str_word_count . '</p>';

echo '<b> The number of characters in the string: </b>';
echo '<p>' . $str_strlen . '</p>';