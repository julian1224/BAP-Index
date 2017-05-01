<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Love the way you move</title>
  </head>
  <body>

  </body>


<?php

$numbers = array(2, 4, 6, 1, 3, 5);

for ($i=0; $i<6; $i++){
echo $numbers[$i] . '<br>';
}
// /// // // // // // // //
echo('<br><hr>');
$numbers[5] = 8;

array_push($numbers, 9, 7);
for ($i=0; $i<8; $i++){
echo $numbers[$i] . '<br>';
}
//
echo('<br><hr>');

$mixed = array(4, "january", "february", 12, "march", 11, "april");


for ($i=0; $i<7; $i++){
echo $mixed[$i] . '<br>';
}
// // // // //

echo('<br><hr>');


$mixed[0] = "fietspomp";
$mixed[1] = "ventiel";
$mixed[2] = "lucht";

array_push($mixed, "may", "june");
array_push($mixed, 8);


for ($i=0; $i<10; $i++){
echo $mixed[$i] . '<br>';
}

echo('<br><hr>');

$subjects = array("PHP" => "Ingrid",
                "JavaScript" => "Ed",
                "Engels" => "Paul");
echo $subjects['PHP'];
echo('<br>');
echo $subjects['JavaScript'];
echo('<br><hr>');
// // // // // // // // //
//  $teachers = array('ingrid', 'jelle', 'joey');
//
//  echo $teachers[1];
//
//
//  $teachers[1] = 'ed';
//
//   var_dump($teachers);
//  print_r($teachers);
//
// for ($i =0; $i < 3; $i++) {
//     echo '<p>' . $teachers[$i] . '</p>';
// }
//
// array_push($teachers, 'theo', 'hugo', 'paul');
// foreach($teachers as $one_teacher) {
//     echo '<p>' . $one_teacher . '</p>';
// }
//
// $subjects = array('ingrid' => 'bap', 'joey' => 'pro', 'jelle' => 'fro');
//
// echo $subjects['ingrid'];
//
// echo('<br>');
//
//
 // foreach($subjects as $teacher => $subject) {
 //     echo $teacher . ' teaches '. $subject . '<br>';
 // }
?>
</html>
