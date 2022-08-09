<?php
// API URL
$url = 'http://lvlyapp.xyz/lvly/getdatacategorywise1.php';
for ($i=1; $i<=70; $i++)
{

	// Create a new cURL resource
	$ch = curl_init($url);

	// Setup request to send json via POST
	$id = "" . $i . "";
	$data = array(
	    'app' => 'com.lyrically.videostatus.maker',
		'cat' => 'Latest',
		'page' => $id
	);
	// print_r($data);die();
	$payload = json_encode($data);

	// Attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// Execute the POST request
	$response = curl_exec($ch);
	//code
	$array = json_decode($response, true); 
	if(curl_error($ch)){
	    echo 'Request Error:' . curl_error($ch);
	}else{
	    print_r($response);
	}
	//end code    
	   
	curl_close($ch);
}	
?>