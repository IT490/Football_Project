<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mock Draft Tool</title>
  </head>
  <body>
  
  <?php
    function my_autoloader($class) {
      include 'classes/' . $class . 'class.php';

    spl_autoload_register('my_autoloader');

    //db connection here through rabbitMQ
    
    $app = new app;
  ?>
  </body>
</html>
