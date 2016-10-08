<?php

  class homeView extends View {

    public function getHTML() {
      //create the view
      $this->html .= "<div class='jumbotron'><p>You have logged in!</p></div>";

      return $this->html;
    }

  }


