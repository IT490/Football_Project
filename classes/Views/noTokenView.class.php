<?php

  class noTokenView extends View {

    public function getHTML() {
      //create the Sign Up view
      $this->html .= "<div class='panel-default'>
                        <h3>You are missing out on amazing stuff man!</h3>
                        <h4>
                          Please <a href='index.php?controller=signupController'>Sign up</a> to get in on the action</br>
                          or <a href='index.php?controller=loginController'>Log in</a> for a new token.</h4>
                        <h4>Thanks!</h4>
                      </div>";
                              
      return $this->html;
    }

  }


