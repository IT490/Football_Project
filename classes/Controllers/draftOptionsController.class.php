<?php
  
  class draftOptionsController extends Controller {

    public function get() {
      $view = new draftOptionsView;
      $this->html = $view->getHTML();
    }

    public function post() {

    }

    public function put() {

    }

    public function delete() {

    }

  }

