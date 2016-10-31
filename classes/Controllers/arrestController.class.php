<?php
  
  class arrestController extends Controller {

    public function get() {
      $view = new arrestView;
      $this->html = $view->getHTML();
    }

    public function post() {

    }

    public function put() {

    }

    public function delete() {

    }

  }

