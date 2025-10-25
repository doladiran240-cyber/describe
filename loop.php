<?php
// $i=0;
// while ($i < 10) {
//     echo $i."<br>";
//     $i++;
// }
// $x=1;
// do {
//     echo "The value of x is$x<br>";
//     $x++;
// } while ($x<=5);

// se a while loop to calculate the sum of numbers from 1 to 100.
// Use a for loop to print the multiplication table of a given number (e.g 5)
// Use a for loop to print all even numbers between 1 and 50.
$sum = 0;
$i = 1;

while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo "the sum of 1 to 100 is " .$sum;
echo "<br>";
echo "Multiplicaton number of 5";
echo "<br>";
$y=5;
for ($y=1; $y <= 12; $y++) { 
    echo $y*5 . "<br>";
}
echo "<br>";
for ($i = 2; $i <= 50; $i += 2) {
    echo $i . "<br>";
}

$x=0;
while ($x <= 5) {
    if($x==3){
         $x++;
        continue;
         
    }
  echo $x;
  $x++;
}
?>