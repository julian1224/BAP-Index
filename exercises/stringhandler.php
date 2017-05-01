<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="instant.css">
    <meta charset="utf-8">
    <title> I was made for loving you </title>
  </head>
  <body>
    <label id="label"> Remember kids, don't be dumb. </label>
    <form method="GET" action="stringhandler.php">

    			 <input type = "text" name = "form" id="form"   placeholder = " string 2">
    			 <input type = "submit"  id = "submit" name = "submit" value = "submit">
    		</form>
        <hr>
        <script>
        var label = document.getElementById("label");

        var advice;

        function changeLabel() {
          switch(Math.floor((Math.random() *4)+1))
          { case 1: advice ="Rule number 1 to dating: don't be unattractive."; break;
            case 2: advice="Remember; you can always just quit."; break;
            case 3: advice="You should definitely whine about stuff online."; break;
            default: advice="It is okay to cry. If you're a baby."; break; }
            label.innerHTML = advice;
        }
        label.addEventListener("click", changeLabel);
        </script>
<?php

$ho = $_GET['form'];


$hello_world = "hello world";
$str_lower = strtolower($ho);
$str_casing = ucwords($ho);
$str_firstlower =  lcfirst($ho);
$str_phpishtml = str_replace("PHP", "HTML", $ho);
$str_sdrawkcab = strrev($ho);

$str_shuffled = str_shuffle($ho);

$str_upper = strtoupper($ho);
$find = strstr($ho, " ");
$str_length = strlen($ho);
$str_compare = strcmp($hello_world, $ho);
$count = str_word_count($ho);

$msg =
"I used strtolower to do this: " . $str_lower . "<br>" .
"I used ucwords to do this: " . $str_casing . "<br>" .
"I used lcfirst to do this: " . $str_firstlower . "<br>" .
"I used str_replace to do this: " . $str_phpishtml . "<br>" .
"I used strrev to do this: " . $str_sdrawkcab . "<br>" .
"I used str_shuffle to do this: " . $str_shuffled . "<br>" .
"I used strtoupper to do this: " . $str_upper . "<br>" .
"I used strstr to do this: " . $find . "<br>" .
"I used strlen to tell that the length is: " . $str_length . "<br>" .
"I used strcmp to tell if hello world is the value: " . $str_compare . "<br>" .
"I used str_word_count to tell that there are " . $count . " words <br>";
echo($msg);

?>
</body>
