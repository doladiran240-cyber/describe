<?php
// no 1 answer
$pass="abcdefghijkmnpqrstuvwxyzABCDEFGHIJKMNPQRSTUVWXYZ/*:-";
$shuffle= str_shuffle($pass);
$password=substr($shuffle, 0,8);
echo "The new generated password is" .$password;
echo "<br>";

//no 2a answer
$round=64.382567;
echo round($round, 2);
echo "<br>";

//no 2b answer
echo sqrt($round);
echo "<br>";

//No2c answer
$original=64.382567;
$rand =rand(1,100);
$larger= max($rand, $original);
echo $larger;
?>
