<?php
// function greeting(){
//     echo "good day";
// }
// greeting();
// echo "<br>";
// function calc(){
//     $a=5;
// $b=6;
//     echo "The sum of 5 and 6 is " .$a+$b;
// }
// calc();
// Used for calculations

// ASSIGNMENT
// write a function that returns the  square of a number
// Write a function that returns "even" if the number is even, otherwise "odd"
// Write a function that takes array of numbers and return the sum of all the no in the array

  $number=2;
function square($number) {
    echo $number * $number;
}
square($number);    
// function square() {
//   echo sqrt(64);
// }

// 2. Function to return "even" if number is even, otherwise "odd";

function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        echo "even";
    } else {
        echo "odd,";
    }
}

// 3. Function to return the sum of all numbers in an array

function sumOfArray($numbers) {
    echo array_sum($numbers);
}
   
echo "<br>";             
echo " Checking if the no is odd or even: " . checkEvenOdd(7) ;       
echo "<br>";        
echo "Sum of 1, 2, 3, 4 " . sumOfArray([1, 2, 3, 4]);


$greeting = function (){
    echo "hello";
};
$greeting();    
?> 