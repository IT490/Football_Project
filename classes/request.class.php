<?php

  class request {
    
    protected $req;

    public function __construct($type, $args = []) {
      
      $req = array();
      $req['type'] = $type;
      $req['message'] = '';
      
    }
  
  }

