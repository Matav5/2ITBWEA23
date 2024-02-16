<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;


$client = new Client();
$response = $client->get("https://swapi.dev/api/people/1");


echo $response->getBody()->getContents();

?>