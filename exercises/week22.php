<?php

$color = array('white', 'green', 'red', 'blue', 'black');
echo('The ' . $color[2] . ' carpet <br>');
echo('The ' . $color[1] . ' lawn <br>');
echo('The ' . $color[0] . ' house <br>');
echo('The leaden sky');
echo('<br><hr>');

$colors = array('white', 'green', 'red');
echo $colors[1];
echo('<br>');
echo $colors[2];
echo('<br>');
echo $colors[0];
echo('<br><hr>');


$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
"Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");


 foreach($ceu as $country => $capital) {
     echo 'The capital of ' . $country . ' is ' . $capital . '<br>';
 }
 echo('<br><hr>');
 

?>
