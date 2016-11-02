<?php
  
  class arrestController extends Controller {

    public function get() {

      session_start();

      if ($_SESSION['token']) {
        $view = new arrestView;
        $this->html = $view->getHTML();
      }

      else { 
        $view = new noTokenView;
        $this->html = $view->getHTML();
      }
    }

    public function post() {

    }

    public function put() {

    }

    public function delete() {

    }

  }

