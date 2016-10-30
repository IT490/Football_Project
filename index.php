<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mock Draft Tool</title>
    <link rel="stylesheet"
    href="css/bootstrap.min.css">
    <link rel="stylesheet"
    href="css/dc.css">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <script
        src="http://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Still need to add Angular.min.js files -->
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dc/1.7.5/dc.js"></script>
    <script type="text/javascript" src="https://rawgithub.com/NickQiZhu/dc.js/master/web/js/crossfilter.js"></script>
  </head>
  <body>
    <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand pull-left" href="index.php"><img src="/img/footballIcon.jpg" alt="Logo" style="height:125%; width:125%;"></a>
          <ul class="nav navbar-nav navbar-left">
            <li role="presentation">
              <a href="index.php">NFL Arrests LoL...</a>
            </li>
          </ul>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation">
            <a href="index.php?controller=signupController"><span><i class="fa fa-optin-monster"></i></span>&nbspSign Up</a>
          </li>
          <li role="presentation">
            <a href="index.php?controller=loginController"><span><i class="fa fa-sign-in"></i></span>&nbspLog In</a>
          </li>
          <li role="presentation">
            <a href="index.php?controller=arrestController"><span><i class="fa fa-cogs"></i></span>&nbspNFL Arrests</a>
          </li>
          <li role="presentation">
            <a href="index.php?controller=playerListController"><i class="fa fa-users"></i></span>&nbspPlayers List</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="main-div">
    <!-- Modal for Login starts here 
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal-1-label">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modal-1-label"><strong>Please Log In</strong></h4>
          </div>
          <div class="modal-body modal-font">
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
    -->
    <?php 
      function my_autoloader($class) {
        if(strpos($class, 'Controller') !== false){
          include 'classes/Controllers/' . $class . '.class.php';
        }
        else if(strpos($class, 'View') !== false) {
          include 'classes/Views/' . $class . '.class.php';
        }
        else { include 'classes/' . $class . '.class.php'; }
      }
      spl_autoload_register('my_autoloader');

      $app = new app;
    ?>
    </div>
    <div class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <p class="navbar-text pull-right">
          A Jb-Y Production &copy <?php echo date("Y"); ?> 
        </p>
      </div>
    </div>
  </body>
</html>
