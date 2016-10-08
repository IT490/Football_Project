<?php
  
  class loginController extends controller {

    public function get() {
      
      $form = new loginForm;
      $this->html .= $form->getHTML();  
    }

    public function post() {

    }

    public function put() {

    }

    public function delete() {

    }

  }

