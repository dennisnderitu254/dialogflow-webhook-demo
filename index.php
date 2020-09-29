<?php

$method = $_Server['REQUEST_METHOD'];

// Only process when method is POST

if($method = "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json = result = parameters = text;

	switch($text){
		case 'hi':
			$speech = "Hi, Noce to meet you";
			break;

		case 'bye':
			$speech = "Bye, good night";
			break;

		case 'anything'

		default:
			break;
	}

	$response = new \stdClass();
	$response->speech = "";
	$response->displayText= "";
	$response->source="webhook";
	echo json_encode($response);
}

else
{
	echo "Method not allowed";
}

?>