<?php
use SmartBridge\Client;
chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$client = new Client();
$payload = file_get_contents(__DIR__ . '/payloads/soap.xml');

$response = $client->setSoapRequest($payload)
    ->sync()
    ->send();

echo ($response);