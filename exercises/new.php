<title>Sweet Child O' Mine</title>

<?php
$str = 'This is some text. I  will be using PHP string functions to change it';
echo('This is my string:' . " $str . " . '<br>');

$str_lower = strtolower($str);
$str_casing = ucwords($str);
$str_firstlower =  lcfirst($str);
$str_phpishtml = str_replace("PHP", "HTML", $str);
$str_sdrawkcab = strrev($str);
$str_upper = strtoupper($str);
$str_shuffled = str_shuffle($str);
$count = str_word_count($str);
$find_php = strstr($str, "PHP");
$str_length = strlen($str);



echo '<b> output: </b>';
echo '<p>' . $str_lower . '</p>';
echo '<p>' . $str_casing . '</p>';
echo '<p>' . $str_firstlower . '</p>';
echo '<p>' . $str_phpishtml . '</p>';
echo '<p>' . $str_sdrawkcab . '</p>';
echo '<p>' . $str_upper . '</p>';
echo '<p>' . $str_shuffled . '</p>';
echo '<b> The number of words in this string: </b>';
echo '<p>' . $count . '</p>';
echo '<b> The  number of characters in this string: </b>';
echo '<p>' . $str_length . '</p>';
echo '<b> The word PHP starts at position: </b>';
echo '<p>' . $find_php . '</p>';
