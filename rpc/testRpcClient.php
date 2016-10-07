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

//echo "client received response: ".PHP_EOL;
//var_dump($response);

//if response is a yes then user is logged in -> welcome user
//else if response is no then alert user that login failed

if ( $response['message']['success'] == 'Yes' ) {
  
  session_start();
  $_SESSION = array();
  $_SESSION['token'] = $response['message']['token'];
  //go back to homepage after successful login
  header('Location: http://www.demo.com/index.php');
  //var_dump($_SESSION);
  //echo "</br></br>";
  //var_dump($response);
  
} 
else { 
  session_start();
  header('Location: http://www.demo.com/index.php');
}
