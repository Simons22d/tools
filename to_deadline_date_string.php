<?php
	// timestamp formatting 
	$datestring = "10/30/2020";
//	$dtime = DateTime::createFromFormat("m/d/Y", $datestring);
//	$deadline = $dtime->getTimestamp();
//	
//	// getting the time difference 
//	$today = time();
//	$time_to_deadline = (int)$deadline - (int)time();
//	print("--------\n".$time_to_deadline."\n--------\n");
	
	
	// get if its past deadline 
	function past_deadline($deadline){
		global $today;
		return ((int)time() - (int)$deadline) < 0 ? true : false;
	}
	
	
	// getting date to deadline
	function days_to_deadline($deadline_timestamp){
		$dtime = DateTime::createFromFormat("m/d/Y", $deadline_timestamp);
		$deadline = $dtime->getTimestamp();
		
		// getting the time difference 
		$today = time();
		$time_to_deadline = (int)$deadline - (int)time();

		$days_past = past_deadline($time_to_deadline);
		return $days_past ? "Past Deadline." : words($time_to_deadline);
	}
	
	// getting the number of days in words
	function words($deadline_timestamp){
		$days = $deadline_timestamp/(3600*24);
		return ($days > 1) ? $days." Days" : $days." Day";
	}
	
	print(days_to_deadline($datestring));
