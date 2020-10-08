<?php 
$yesterday = time() - 3600*24;
$today = time();
$deadline = time() + 3600*24*7;

$time_to_deadline = $deadline - $today;

function days_to_deadline($deadline_timestamp){
	return date("z",$deadline_timestamp). " Days.";
}

print(days_to_deadline($time_to_deadline));
