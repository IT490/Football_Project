#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
require_once('../classes/dbConn.class.php');

function doLogin($username,$password)
{
  // lookup username in database
  // check password
  // if user is in DB then return a Yes in response else return No
  $db = dbConn::getConnection();
  $sql = $db->prepare( 'SELECT * FROM Login WHERE Username = :user AND Password = :pw' );
  $sql->execute( array( ':user' => $username, ':pw' => $password ) );

  if( $sql->fetch() ){
    //Login successful
    return array( 'returnCode' => '0', 'message' => 'Yes' );
  
  } else { return array( "returnCode" => '0', 'message' => "No" ); }
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
      return doLogin($request['username'],$request['password']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

$server->process_requests('requestProcessor');
exit();
?>

