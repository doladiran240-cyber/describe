<?php
// 1. Formatting Dates
$timestamp = strtotime("2025-09-23");
echo date("l, F jS Y", $timestamp); 
echo "<br>";

// 2. Getting Timestamps
echo time(); // Current Unix timestamp
echo "<br>";
$timestamp = mktime(15, 30, 0, 9, 23, 2025);
echo $timestamp; // Specific timestamp for 2025-09-23 15:30:00
echo "<br>";
// 3. Working with DateTime Object
$now = new DateTime();
echo $now->format("Y-m-d H:i:s");
echo "<br>";
//4. Create from custom date
$custom = new DateTime("2025-12-25");
echo $custom->format("l, F jS Y");
echo "<br>";
//  5. Date Calculations
$date = new DateTime("2025-09-23");
$date->modify("+1 week");
echo $date->format("Y-m-d"); // Output: 2025-09-30

$date->modify("-2 days");
echo $date->format("Y-m-d"); // Output: 2025-09-28
echo "<br>";
//  6. Date Difference
$date1 = new DateTime("2025-09-23");
$date2 = new DateTime("2025-10-05");
$interval = $date1->diff($date2);

echo $interval->days;       // Output: 12
echo $interval->format('%R%a days'); // +12 days
echo "<br>";
// <!--  7. Sleep / Delay -->
sleep(5); // Pauses script for 5 seconds

// <!--  8. Loop Through Date Range -->
$start = new DateTime("2025-09-01");
$end = new DateTime("2025-09-07");

$interval = new DateInterval('P1D'); 
$daterange = new DatePeriod($start, $interval, $end);

foreach ($daterange as $date) {
    echo $date->format("Y-m-d") . "<br>";
}
echo "<br>";
// <!--  9. Parsing Strings into Dates -->
$date = strtotime("next Monday");
echo date("Y-m-d", $date);
?>