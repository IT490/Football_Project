<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mock Draft Tool</title>
    <link rel="stylesheet"
    href="Boostrap/css/bootstrap.min.css">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <!-- Still need to add Angular.min.js files -->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Logo Here</a>
        </div>
        <ul class="nav navbar-nav">
          <li role="presentation" class="active"><a href="index.php">Home</a></li>
      <!--    <li><a href="index.php?controller=LoginController">Mock Draft</a></li> -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation">
            <button type="button" class="btn btn-primary" data-toggle="modal"
             data-target="#modal1"><span><i class="fa fa-sign-in"></i></span>Log In</button>
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
          </div>
          <div class="modal-footer">
            <button type="button"
          </div>
        </div>
      </div>
    </div>
        
  <?php
    function my_autoloader($class) {
      include 'classes/' . $class . 'class.php';

    spl_autoload_register('my_autoloader');

    //db connection here through rabbitMQ
    
    //$app = new app;
  ?>
  </body>
</html>
