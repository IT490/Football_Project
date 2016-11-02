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
    <link rel="stylesheet" href="/css/main.css">
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
    <?php 
      function my_autoloader($class) {
        if(strpos($class, 'Controller') !== false){
          include 'classes/Controllers/' . $class . '.class.php';
        }
        else if(strpos($class, 'View') !== false) {
          include 'classes/Views/' . $class . '.class.php';
        }
        else if (strpos($class, 'Model') !== false) {
          include 'classes/Models/' . $class . '.class.php';
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
