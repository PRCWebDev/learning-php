<?php

// Write a script to display the number of days until Christmas.

date_default_timezone_set('Europe/Bucharest');

$currentTime = time();

echo $currentTime;

echo "<br>";

$christmas2022 = "25th December 2022";

$date = strtotime($christmas2022);

echo $date;

echo "<br>";

$seconds = $date - $currentTime;

$minutes = $seconds / 60;

$hours = $minutes / 60;

// $days = floor($hours / 24);
$days = ceil($hours / 24);

echo "There are $days days left until $christmas2022.";