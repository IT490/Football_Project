<?php
  
  class loginController extends Controller {

    public function get() {
      
      $view = new loginView;
      $this->html .= $view->getHTML();  
    }

    public function post() {
      //require_once('path.inc');
      //require_once('get_host_info.inc');
      //require_once('rabbitMQLib.inc');
      require __DIR__ . '/../../config.php';
      /*
      $client = new rabbitMQClient("testRabbitMQ.ini", "testServer");

      $msg = array();

      $msg['user'] = $_POST['user'];
      $msg['pw'] = $_POST['pw'];

      $request = array();
      $request['type'] = "Login";
      $request['username'] = "test"; //login for rabbitmq
      $request['password'] = "test"; //password for rabbit login
      $request['message'] = $msg; //attach msg array to request

      $response = $client->send_request($request); //send the request to rpc server

      //below here is all handling the response from rpcServer.php

      if ( $response['message']['success'] == "Yes" ) {
        //login was successful
        session_start();
        $_SESSION['token'] = $response['message']['token'];
        $_SESSION['success'] = $response['message']['success'];

        echo "Logged In successfully";
      } 
      else {
        session_start();
        
        header('Location: index.php?controller=signupController');
      }
       */

      $creds = array();
      $creds['user'] = $_POST['user'];
      $creds['pw'] = $_POST['pw'];

      $client = new Thumper\RpcClient($registry->getConnection());
      $client->initClient();
      $client->addRequest(serialize($creds), 'doLogin', 'doLogin');
      $replies = $client->getReplies();
      $data = unserialize($replies["doLogin"]);
      
      if ( $data["success"] == "Yes" ) {
        session_start();
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['token'] = $data["token"];
        header('Location: index.php?controller=signedInController');
      }
      else {
        header('Location: index.php?controller=signupController');
      }
    }

    public function put() {

    }

    public function delete() {

    }

  }

