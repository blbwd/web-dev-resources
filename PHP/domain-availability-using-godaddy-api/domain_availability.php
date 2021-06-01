<?php
$domain = 'blbwdxdrety.com.au';

// For the OTE environment, use your OTE Key and Secret with the following base URL: https://api.ote-godaddy.com
// For the production environment, use your production Key and Secret with the following base URL: https://api.godaddy.com

$url = "https://api.godaddy.com/v1/domains/available?domain=".$domain;

// set your key and secret
$header = array(
	'Authorization: sso-key 3AitPPw96X_31LqiEw6EEDujrLf254UG5:SfqNikEJx4WzH61gcwnETS'
);

//open connection
$ch = curl_init();
$timeout = 60;

//set the url and other options for curl
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);  
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); // Values: GET, POST, PUT, DELETE, PATCH, UPDATE 
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//execute call and return response data.
$result = curl_exec($ch);
//close curl connection
curl_close($ch);
// decode the json response
$dn = json_decode($result, true);

print_r($dn);

?>