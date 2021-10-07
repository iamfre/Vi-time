<?php

// degree
$degree = 195.1;

function GetTime($degree)
{
	// hours
	if ($degree < 30) {
		$hours = 12;
	} else {
		$hours =  intdiv($degree, 30);
	}

	// minutes
	$minutes =  $degree / 0.5 % 60;

	// seconds
	$seconds_all =  $degree / (360 / 43200);
	$seconds =  round($seconds_all % 60);

	$time_arr = [
		'часы' => $hours,
		'минуты' => $minutes,
		'секунды' => $seconds
	];
	return $time_arr;
}


$time_arr = GetTime($degree);

echo "<pre>";
print_r($time_arr);
echo "</pre>";
