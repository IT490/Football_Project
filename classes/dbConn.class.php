<?php

  class dbConn {

    protected static $db;

    private function __construct() {

      try {

        //assign PDO object to db Variable
        //this is using my NJIT SQL DB -> need to change to IT490 DB
        self::$db = new PDO('mysql:host=localhost;dbname=it490;', 'nflGuy', 'nflGuy');
        self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      }
      catch (PDOException $e) {
        echo "Connection Error: " . $e->getMessage();
      }
    }

    public static function getConnection() {

      //Guarantee single instance, if no connection object exists create one

      if ( !self::$db ) {
        //new connection object
        new dbConn();
      }

      //return the connection
      return self::$db;
    }

  }


