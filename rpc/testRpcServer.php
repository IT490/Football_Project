#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
//include('dbConn.class.php');

function doLogin($username,$password)
{
  // lookup username in database
  // check password
  // if user is in DB then return a Yes in response else return No
  
    $db = new PDO('mysql:host=localhost;dbname=it490;', 'nflGuy', 'nflGuy'); 
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = $db->prepare( 'SELECT * FROM Login WHERE Username = :user AND Password = :pw' );
    $sql->execute( array( ':user' => $username, ':pw' => $password ) );
    $results = $sql->fetch();
    if ($results){
      //Login successful
      $msgArr = array();
      $msgArr['token'] = uniqid();
      $msgArr['success'] = "Yes";
      return array( 'returnCode' => '0', 'message' => $msgArr );
    
    } 
    else { 
      $msgArr = array();
      $msgArr['success'] = "No";
      return array( "returnCode" => '0', 'message' => $msgArr ); 
    }
}
function requestProcessor($request)
{
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
 
  switch ($request['type'])
  {
    case "Login":
      return doLogin($request['message']['username'],$request['message']['pw']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

$server->process_requests('requestProcessor');
exit();


