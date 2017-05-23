<?php

	
	define('CONSUMER_KEY', '227F3M');
	define('CALLBACK_URL', 'http://localhost/ArdejaProject/fitBitArdeja/callback.php');

	
	define('AUTH_URL', 'https://www.fitbit.com/oauth2/authorize');


	$params = array(
		'client_id' => CONSUMER_KEY,
		'redirect_uri' => CALLBACK_URL,
		'scope' => 'heartrate',
		'response_type' => 'code',
	);

	header("Location: " . AUTH_URL . '?' . http_build_query($params));