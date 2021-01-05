<?php
$mobile="916305602201";
	$message="Hiii";
	$data = [
    'phone' => $mobile, // Receivers phone
    'body' => $message, // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://eu138.chat-api.com/instance207869/message?token=cx9bl212evt0y8ng';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);
print_r($result);
?>