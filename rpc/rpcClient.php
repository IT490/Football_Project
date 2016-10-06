<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
$msg = array();

$msg['username'] = $_POST['user'];
$msg['pw'] = $_POST['pw'];

$request = array();
$request['type'] = "Login";
$request['username'] = "test";
$request['password'] = "test";
$request['message'] = $msg;
$response = $client->send_request($request);
//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
var_dump($response);


