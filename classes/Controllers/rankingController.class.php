<?php
  
  class rankingController extends Controller {

    public function get() {
      
      $view = new rankingView;
      $this->html .= $view->getHTML();
      $model = new rankingModel;
      $this->html .= $model->getRanks();  
    }

    public function post() {
      $view = new rankingView;
      $this->html .= $view->getHTML();

      if (isset($_POST["position"]) && isset($_POST["week"]) ) {
        $model = new rankingModel($_POST["position"], $_POST["week"]);
        $this->html .= $model->getRanks();  
      } 
    
    }

    public function put() {

    }

    public function delete() {

    }

  }

