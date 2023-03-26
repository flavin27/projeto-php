<?php
function gerarChassi() {
    $url = "https://geradorbrasileiro.com/api/faker/chassi?limit=1";
    $response = file_get_contents($url);
    $response = json_decode($response, true); // decode JSON into an associative array
    $chassi = $response['values'][0];
    return $chassi;
}

?>
