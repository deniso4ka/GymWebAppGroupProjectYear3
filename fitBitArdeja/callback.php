<?php


define('CONSUMER_KEY', '227F3M');
define('CONSUMER_SECRET','aeba71c4eb99e8ba80ab70682b434dda');
define('CALLBACK_URL', 'http://localhost/ArdejaProject/fitBitArdeja/callback.php');

define('TOKEN_URL', 'https://api.fitbit.com/oauth2/token');


$params = array(
	'client_id' => CONSUMER_KEY,
	'grant_type' => 'authorization_code',
	'redirect_uri' => CALLBACK_URL,
	'code' => $_GET['code'],
);

$header = [
	'Authorization: Basic ' . base64_encode(CONSUMER_KEY.':'.CONSUMER_SECRET),
	'Content-Type: application/x-www-form-urlencoded',
];


$options = array(
	'http' => array(
		'method' => 'POST',
		'header' => implode(PHP_EOL,$header),
		'content' => http_build_query($params),
		'ignore_errors' => true
		)
	);

$context = stream_context_create($options);

$res = file_get_contents(TOKEN_URL, false, $context);


$token = json_decode($res, true);
if(isset($token['error'])){
	echo 'token error';
	exit;
}


$access_token = $token['access_token'];
$user_id = $token['user_id'];


$params = array('access_token' => $access_token);

//$api_url = 'https://api.fitbit.com/1/user/' . $user_id . '/activities/heart/date/today/1d.json';
//$api_url = 'https://api.fitbit.com/1/user/' . $user_id . '/activities/heart/2016-01-26/today/1d.json';
$api_url = 'https://api.fitbit.com/1/user/' . $user_id . '/activities/heart/date/2016-02-10/1d.json';


$header = 'Authorization: Bearer ' . $access_token;
$options = array(
	'http' => array(
		'method' => 'GET',
		'header' => $header,
		'ignore_errors' => true
		)
	);
$context = stream_context_create($options);

$res = file_get_contents($api_url, false, $context);

$heartrate = json_decode($res, true);


echo '<pre>';
var_dump($heartrate);
echo '</pre>';


$activeHeart = $heartrate['activities-heart'];

print_r($activeHeart);
echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
$dateTime = $activeHeart[0];

print_r($dateTime);
echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
$dateTimePrint = $dateTime['dateTime'];

echo $dateTimePrint;

echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
$value = $dateTime['value'];
print_r($value);

echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
$customHeartRateZone = $value['customHeartRateZones'];
$restingHeartRate = $value["restingHeartRate"];
$heartRateZone = $value["heartRateZones"];


echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
$heartRateZone1Print = $heartRateZone[0];
print_r($heartRateZone1Print);
$minutes = $heartRateZone1Print['minutes'];
print_r($minutes);
$test= $heartRateZone1Print['caloriesOut'];
echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
echo $test;
echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
$heartRateZone2Print = $heartRateZone[1];
print_r($heartRateZone2Print);



echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
$heartRateZone3Print = $heartRateZone[2];
print_r($heartRateZone3Print);

echo ' <br> ';
echo ' <br> ';
echo ' <br> ';
$heartRateZone4Print = $heartRateZone[3];
print_r($heartRateZone4Print);

echo ' <br> ';
echo ' <br> ';
echo ' <br> ';

echo $restingHeartRate;