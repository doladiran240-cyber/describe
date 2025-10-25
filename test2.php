<?php
//  1. Check if a number is even or odd
$number = 15;
if ($number % 2 == 0) {
    echo "$number is Even<br>";
} else {
    echo "$number is Odd<br>";
}

// 2. Check if number is positive, negative, or zero
if ($number > 0) {
    echo "$number is Positive<br>";
} elseif ($number < 0) {
    echo "$number is Negative<br>";
} else {
    echo "$number is Zero<br>";
}

// 3. Check voting eligibility
$age = 20;
if ($age >= 18) {
    echo "Eligible to Vote<br>";
} else {
    echo "Not Eligible to Vote<br>";
}

// 4. Take score and print grade
$score = 100;
if ($score >= 90 && $score <= 100) {
    echo "Grade: A<br>";
} elseif ($score >= 80 && $score <= 89) {
    echo "Grade: B";
} elseif ($score >= 70 && $score <= 79) {
    echo "Grade: C";
} elseif ($score >= 60 && $score <= 69) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}

// Use switch to print the name of the day based on a number(1=Monday, 7 =Sunday).
$dayNumber = 3;
switch ($dayNumber) {
    case 1: 
        echo "Monday<br>"; 
        break;
    case 2: 
        echo "Tuesday<br>"; 
        break;
    case 3:
         echo "Wednesday<br>"; 
         break;
    case 4:
         echo "Thursday<br>"; 
         break;
    case 5: echo "Friday<br>"; 
    break;
    case 6: echo "Saturday<br>"; 
    break;
    case 7: echo "Sunday<br>"; 
    break;
    default: echo "Invalid day number<br>";
}

// 6. Discount System
$purchaseAmount = 1200;
if ($purchaseAmount >= 1000) {
    $discount = 0.20 * $purchaseAmount;
    echo "Discount: 20% = $discount";
    
} elseif ($purchaseAmount >= 500 && $purchaseAmount < 1000) {
    $discount = 0.10 * $purchaseAmount;
    echo "Discount: 10% = $discount";
} else {
    echo "No Discount";
}
echo "<br>";

// 7. Check if student passed
$studentScore = 75;
if ($studentScore >= 50) {
    echo "Passed";
    if ($studentScore >= 70) {
        echo "Passed with Merit";
    }
} else {
    echo "Failed";
}
?>