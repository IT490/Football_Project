<?php
  
  class loginController extends Controller {

    public function get() {
      
      $view = new loginView;
      $this->html .= $view->getHTML();  
    }

    public function post() {

    }

    public function put() {

    }

    public function delete() {

    }

  }

