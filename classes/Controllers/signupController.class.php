<?php
  
  class signupController extends Controller {

    public function get() {
      $view = new signupView;
      $this->html = $view->getHTML();
    }

    public function post() {

      require __DIR__ . '/../../config.php';

      $acct = array();
      $acct['user'] = $_POST['user'];
      $acct['pw'] = $_POST['pw'];
      $acct['firstName'] = $_POST['firstName'];
      $acct['lastName'] = $_POST['lastName'];

      $client = new Thumper\RpcClient( $registry->getConnection() );
      $client->initClient();
      $client->addRequest( serialize($acct), 'signup', 'signup');
      $replies = $client->getReplies();

      $data = unserialize( $replies['signup'] );

      //if account signup was successful -> alert user and redirect
      if ( $data['success'] == "Yes" ) {
        $_SESSION['user'] = $data['user'];
        $_SESSION['token'] = $data['token'];
        echo "<script>
                window.setTimeout(function() {
                  window.location = 'index.php?controller=signedInController';
                  }, 5000);
              </script>";
        echo "<div class='jumbotron'>
                <h3>Congratulations! Your account is set up.</h3>
                <p>You can now enjoy the awesome power of Da Drafterizer.</br>
                   Destroy your friends, stomp your neighbors, steal money from</br>
                   old people, and take candy from babies. You are a boss!
                </p>
                <p><span><i class='fa fa-pulse fa-spinner fa-cog'></i></span>Redirecting in 5 seconds...</p>
              </div>";
      }
      else {
        echo "<div class='page-header'>
                <h3>Error in creating account! | <small>Please try again</small></h3>
              </div>";
        header('Location: index.php?controller=signupController');
      }
    }

    public function put() {

    }

    public function delete() {

    }

  }

