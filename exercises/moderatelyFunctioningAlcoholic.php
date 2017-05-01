<!DOCTYPE html>
<html>
<head>
<title> Alice Cooper ain't got shit on me </title>
</head>
<body>
<a> Pick your poison.</a>
<form method="post" name="drink">
      <input type="text" name="drink" /> <br>
      <input type="submit" name="submit" value="Have a go at it, mate">
</form>


<?php
$bodka = "https://i.ytimg.com/vi/zvzkOLG4vjg/maxresdefault.jpg";
$wine = "http://www.ampercent.com/wp/wp-content/uploads/Wine-for-Linux.png";
$beer = "http://ppcorn.com/us/wp-content/uploads/sites/14/2015/10/wehat-beer-ppcorn.jpg";
$isopropyl = "http://www.mpbio.com/images/product-images/molecular-structure/02194006.png" ;
$bleach = "https://i.ytimg.com/vi/c_5dSMZpijw/hqdefault.jpg";
$else = "http://www.touristofdeath.com/gallery/d/116-1/absurd.jpg";
$drink = "";

$form = $_POST['drink'];

if (ISSET($form)){
switch($form) {
    case "bodka";
        echo "VERY GOOD KOMRAD! <br>";
        echo '<img src="' . $bodka . '" alt="there should be something here."/><br>';
        break;

    case "wine";
        echo "loser's drink <br>";
        echo '<img src="' . $wine . '" alt="there should be something here."/><br>';
        break;

    case "beer";
        echo "Eh. Moderate choice. <br>";
        echo '<img src="' . $beer . '" alt="there should be something here."/><br>';
        break;

    case "isopropyl";
        echo "All that is alcohol isn't drinkable <br>";
        echo '<img src="' . $isopropyl . '" alt="there should be something here."/><br>';
        break;

    case "bleach";
        echo "My recommended beverage for you! <br>";
        echo '<img src="' . $bleach . '" alt="there should be something here."/><br>';
        break;

    default;
        echo "YOUR poison, not mine. <br>";
          echo '<img src="' . $else . '" alt="yo wtf happened."/><br>';
      };

echo('You are drinking ' . $form . '?');
};

?>


</body>
</html>
