<?php
// Capitaize every first words in a sentence
$first = "how are you";
echo ucfirst($first);

echo "<br>";
$text = "Hello World";
echo substr($text,6);
$text = "Hello World";
echo substr($text,0,5);

echo "<br>";
$shuffle = "Drawing";
echo str_shuffle($shuffle);

echo "<br>";
$php = "PHP is a powerful programming language";
echo wordwrap($php, 17, "<br>");


echo "<br>";
$trim = " Hi ";
echo trim($trim);

echo "<br>";
$rtrim = " Hi ";
echo rtrim($rtrim);


echo "<br>";
$ltrim = " Hi ";
echo ltrim($ltrim);




echo "<br>";
echo abs(-7);
echo "<br>";
echo pow(2,3);
echo "<br>";
echo log(10);
echo "<br>";
echo log10(10000000);

?>