<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mock Draft Tool</title>
    <link rel="stylesheet"
    href="css/bootstrap.min.css">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <script
        src="http://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Still need to add Angular.min.js files -->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><img src="/img/footballIcon.jpg" alt="Logo" style="height:125%; width:125%;"></a>
        </div>
        <ul class="nav navbar-nav">
          <li role="presentation" class="active"><a href="index.php">Home</a></li>
      <!--    <li><a href="index.php?controller=LoginController">Mock Draft</a></li> -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation">
            <a href="#modal1" role="button" class="btn" data-toggle="modal"
            ><span><i class="fa fa-sign-in"></i></span>&nbspLog In</a>
          </li>
          <li role="presentation">
            <a href="index.php?controller=DraftOptions">Mock Draft</a>
          </li>
          <li role="presentation">
            <a href="index.php?controller=PlayerList">Players</a>
          </li>
          <li role="presentation">
            <a href="index.php?controller=StartSit">Start/Sit</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="alert">
    </div> 
    <!-- Modal for Login starts here -->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal-1-label">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modal-1-label"><strong>Please Log In</strong></h4>
          </div>
          <div class="modal-body modal-font">
          <!-- form for log in goes here -->
          <form class="form-horizontal" action="rpc/testRpcClient.php" method='post'>
            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="username" name="user" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="pw" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember Me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign In</button>
              </div>
            </div>
          </form>
          </div>
          <div class="modal-footer">
            <h5>If you do not have an account...</br></h5>
            <button type="button" class="btn btn-primary">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <?php 
      function my_autoloader($class) {
        include 'classes/' . $class . 'class.php';
      }
      spl_autoload_register('my_autoloader');

      //db connection here through rabbitMQ
    
      //$app = new app;
    ?>
    
    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <p class="navbar-text pull-right">
          &copy; <?php echo date("Y"); ?> JBY Inc.
        </p>
      </div>
    </nav>
    </body>
      <script>
      $(window).on('load', function() {
        var succ = "<?php echo $_SESSION['success']; ?>";  
      if( succ == "Yes" ){
        $('#alert').replaceWith("<div class='alert alert-success' role='alert'><h5><strong>Success! </strong>You are logged in.</h5></div>");
      }
      if( succ == "No" ) {
        $('#alert').replaceWith("<div class='alert alert-danger' role='alert'><h5><strong>No account! </strong>Please <a class='alert-link' href='index.php?controller=signupController'>Sign up</a></h5></div>");
      }
    });
  </script>
</html>
