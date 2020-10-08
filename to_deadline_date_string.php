<?php
	// timestamp formatting 
	$datestring = "10/10/2021";
	$dtime = DateTime::createFromFormat("d/m/Y", $datestring);
	$deadline = $dtime->getTimestamp();
	
	// getting the time difference 
	$today = time();
	$time_to_deadline = (int)$deadline - (int)time();

	// get if its past deadline 
	function past_deadline($deadline){
		global $today;
		return ((int)time() - (int)$deadline) < 0 ? true : false;
	}
	
	
	// getting date to deadline
	function days_to_deadline($deadline_timestamp){
		$days_past = past_deadline($deadline_timestamp);
		return $days_past ? "Past Deadline." : words($deadline_timestamp) ;
	}
	
	// getting the number of days in words
	function words($deadline_timestamp){
		$days = $deadline_timestamp/(3600*24);
		return ($days > 1) ? $days." Days" : $days." Day";
	}
	
	print(days_to_deadline($time_to_deadline));
