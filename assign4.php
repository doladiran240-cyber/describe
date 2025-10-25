<?php
$obi=["maths"=>89,"english"=>76, "physics"=> 87,"chemistry"=>61,"biology"=>69,];
$esther=["maths"=>87,"english"=>56, "physics"=>64,"chemistry"=>22,"biology"=>37,];
$peter=["maths"=>34,"english"=>45, "physics"=> 23,"chemistry"=>50,"biology"=>35];
$james=["maths"=>67,"english"=>38, "physics"=> 56,"chemistry"=>48,"biology"=>69,];
$john=["maths"=>56,"english"=>70, "physics"=> 98,"chemistry"=>72,"biology"=>53,];
$gabby=["maths"=>34,"english"=>56, "physics"=> 34,"chemistry"=>85,"biology"=>87,];
$thelma=["maths"=>98,"english"=>87, "physics"=> 84,"chemistry"=>39,"biology"=>53,];
$precious=["maths"=>23,"english"=>76, "physics"=> 67,"chemistry"=>45,"biology"=>56,];

$sum_obi=$obi["maths"]+$obi["english"]+$obi["physics"]+$obi["chemistry"]+$obi["biology"];
echo "Obi score is " .$sum_obi;
$obi_avr=$sum_obi/5;
echo  "<br>";
echo "Obi's average is ".$obi_avr;
echo  "<br>";
$sum_esther=$esther["maths"]+$esther["english"]+$esther["physics"]+$esther["chemistry"]+$esther["biology"];
echo "Esther score is " .$sum_esther;
echo  "<br>";
$esther_avr=$sum_esther/5;
echo "esther's average is ".$esther_avr;
echo  "<br>";
$sum_peter=$peter["maths"]+$peter["english"]+$peter["physics"]+$peter["chemistry"]+$peter["biology"];
echo "Peter score is " .$sum_peter;
echo  "<br>";
$peter_avr=$sum_peter/5;
echo "peter's average is ".$peter_avr;
echo  "<br>";
$sum_james=$james["maths"]+$james["english"]+$james["physics"]+$james["chemistry"]+$james["biology"];
echo "James score is " .$sum_james;
echo  "<br>";
$james_avr=$sum_james/5;
echo "james's average is ".$james_avr;
echo  "<br>";
$sum_john=$john["maths"]+$john["english"]+$john["physics"]+$john["chemistry"]+$john["biology"];
echo "John score is " .$sum_john;
echo  "<br>";
$john_avr=$sum_john/5;
echo "john's average is ".$john_avr;
echo  "<br>";
$sum_gabby=$gabby["maths"]+$gabby["english"]+$gabby["physics"]+$gabby["chemistry"]+$gabby["biology"];
echo "Gabby score is " .$sum_gabby;
echo  "<br>";
$gabby_avr=$sum_gabby/5;
echo "gabby's average is ".$gabby_avr;
echo  "<br>";
$sum_thelma=$thelma["maths"]+$thelma["english"]+$thelma["physics"]+$thelma["chemistry"]+$thelma["biology"];
echo "Thelma score is " .$sum_thelma;
echo  "<br>";
$thelma_avr=$sum_thelma/5;
echo "thelma's average is ".$thelma_avr;
echo  "<br>";
$sum_precious=$precious["maths"]+$precious["english"]+$precious["physics"]+$precious["chemistry"]+$precious["biology"];
echo "Precious score is " .$sum_precious;
echo  "<br>";
$precious_avr=$sum_precious/5;
echo "Precious's average is ".$precious_avr;
// $sumall= $obi+$esther+$peter+$james+$john+$gabby+$thelma+$precious;
// echo $sumall;
echo "<br>";

$average=$obi_avr+$esther_avr+$peter_avr+$james_avr+$john_avr+$gabby_avr+$thelma_avr+$precious_avr;
echo "The total average of each students ".$average;

echo "<br>";

$total_score=$sum_obi+$sum_esther+$sum_peter+$sum_james+$sum_john+$sum_gabby+$sum_thelma+$sum_precious;
echo "The total score

of each students ".$total_score;

?>