<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Ma page</h1>
<?php


echo  'Bonjour';

$nb1 = 1.55;
$isPublished = true;

$content = "<p>Contenu du paragraphe : $nb1</p>";
$content2 = '<p>Contenu du paragraphe : $nb1;</p>';

echo $content;
echo $content2;

// Les constantes
const NB_ARTICLES_PER_PAGES = 6;
define("DATABASE_NAME", "php_project");

echo NB_ARTICLES_PER_PAGES;
echo DATABASE_NAME;

// On ne modifie pas une constante
// NB_ARTICLES_PER_PAGES = 12;

// echo_FILE__;

var_dump($content);
print_r($content);

$str1 = "Bonjour";
$str2 = " tout le monde";

echo "Bonjour : " . $str2;




$temp=50;


if($temp>=50) {
    echo "il fait trop chaud";
}  elseif ($temp>= 20){
    echo "il fait chaud";
}  elseif ($temp>=0){
    echo "il fait idéal";
}  else{
    echo "il fait froid";
}



// Les boucles

// Objectif : créer une liste à puces (10 puces)
echo "<ul>";
$i = 0;
while ($i<10){
    echo "<li>Puce $i</li>";
    $i++;
}
echo "</ul>";

// Tableau indexé
$fruits = ["kiwi", "banane", "fraise", "ananas", "cerise"];
echo "<ul>";
foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
}
echo "</ul>";


$people = [
 "firstName" => "John",
 "lastName" => "Doe",
 "age" => 41
];



?>





<table>
    <thead>
    <tr>
        <?php
        foreach ($people as $key => $value) {
            echo "<td>$key</td>";
        }
        ?>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        foreach ($people as $value) {
            echo "<td>$value</td>";
        }
        ?>
    </tr>
    </tbody>








</table>


</body>
</html>