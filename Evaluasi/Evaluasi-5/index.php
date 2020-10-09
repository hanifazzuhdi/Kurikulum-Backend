<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new GuzzleHttp\Client();

// GuzzleHttp\RequestOptions::FORM_PARAMS;

$response = $client->request('POST',  'https://api.pondokprogrammer.com/api/student_login',  ['form_params'  => ['email' => 'hnfhanif52@gmail.com', 'password' => '08999981907']]);

// var_dump($response);

$getToken = $response->getBody()->getContents();

// var_dump($token);

$hasilToken = json_decode($getToken);

// var_dump($hasilToken);

$client->request('POST', 'https://api.pondokprogrammer.com/api/class/qr?class_id=85', [
    'headers' => [
        'User-Agent' => 'testing/1.0',
        'Accept'     => 'application/json',
        "Authorization" => "bearer $hasilToken->token"
    ]
]);
