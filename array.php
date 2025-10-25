<?php
// $student=["name"=> "Obi", "dob"=>"27/05/2023", "height" => 67, "weight = >56"];
// echo $student["name"] [];

$num =[34,67,12,43,65,12,56,81,45,32,67,89,13,43];
// $calc = ["one"=>34,"two"=>67,"three"=>12,"four"=>43,"five"=>65, "six"=>12,"seven"=> 56, "eight"=>81,"nine"=>45,"ten"=>32,"eleven"=>67,"twelve"=>89,"thirteen"=>13,"fourteen"=>43];
// echo $calc ["one"] + $calc["two"]+ $calc["three"]+ $calc["four"]+ $calc["five"]+ $calc["six"]+ $calc["seven"]+ $calc["eight"]+ $calc["nine"]+ $calc["ten"]+ $calc["eleven"]+ $calc["twelve"]+ $calc["thirteen"]+ $calc["fourteen"];
$sum= $num[0]+$num[1]+$num[2]+$num[3]+$num[4]+$num[5]+$num[6]+$num[7]+$num[8]+$num[9]+$num[10]+$num[11]+$num[12]+$num[13];
$avr=$sum/14;
echo $avr;
?>