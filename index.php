<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
$client = new Client();

$response = $client->request( 'GET', 'http://localhost/phpslim3basicauth/public/api/users', [
    'headers' => [
      'Authorization' => 'Basic YWRtaW46MTIzNA=='
    ]
  ] );

echo $response->getBody();