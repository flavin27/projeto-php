<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

function gerarChassi() {
    $client = new Client(['verify' => false]);
    $response = $client->request('GET', 'https://geradorbrasileiro.com/api/faker/chassi');
    $body = $response->getBody();
    $json = json_decode($body, true);
    $chassi = $json['values'][0];
    return $chassi;
}
?>
