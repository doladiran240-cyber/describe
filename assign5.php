<?php
$people=array("Debi","Joe","Gideon","Joy");
echo current($people)."<br>";

echo "<br>";
$a1=array_fill(2,6,"blue");
print_r($a1);

echo "<br>";
$citizen=array("Ayo","Toyin","Thelma","Christopher");
echo "The key from the current position is:".key($citizen);

echo "<br>";
$a=array("a"=>"red","b"=>"blue","c"=>"green");
print_r(array_unique($a));

echo "<br>";
$names=array("Ayo","Toyin","Thelma","Christopher");
print_r(array_slice($names,2));

?>