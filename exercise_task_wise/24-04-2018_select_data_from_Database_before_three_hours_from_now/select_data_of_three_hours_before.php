<?php
	date_default_timezone_set('Asia/Dhaka');
	$hr3_before = time() - (60 * 60 * 3);
	                   
	echo 'Now:       '. date('Y-m-d h:i:s') ."\n<br/>";
	//echo 'Next Week: '. date('Y-m-d h:i:s', $hr3_before) ."\n";
	
	$start = date('h:i:s');
	$end   = date('h:i:s', $hr3_before);
	echo "3 hours before ".$end;


	$query = "select date_reserved from table where book_time between '$start' and '$end' order by reservation_id desc";
?>