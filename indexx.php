<?php
	// Step 1
	$cSession = curl_init(); 
	// Step 2
	curl_setopt($cSession,CURLOPT_URL,"http://api.wunderground.com/api/7c314d8a0d16bf34/forcast/q/23.8759827,90.323081.json");
	curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($cSession,CURLOPT_HEADER, false); 
	// Step 3
	$result=curl_exec($cSession);
	// Step 4
	curl_close($cSession);
	// Step 5
	$data = json_decode($result);
	//7c314d8a0d16bf34

	echo "<pre>";
	print_r($data);
	echo "</pre>";
	
?> 
