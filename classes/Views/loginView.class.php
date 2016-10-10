<?php

  class loginView extends View {

    public function getHTML() {
      //create the view
      $this->html .= "<div class='page-header'>
                        <h2 class>&nbsp<span><i class='fa fa-lg fa-archive'></i></span>&nbspSign in</h2>
                      </div>";
      $this->html .= "<form class='form-horizontal' method='post' action='index.php?controller=loginController'>
                        <div class='form-group'>
                          <label for='username' class='col-sm-2 control-label'>Username: </label>
                          <div class='col-sm-4'>
                            <input type='email' class='form-control' id='user' name='user' placeholder='Enter your username'>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label for='password' class='col-sm-2 control-label'>Password: </label>
                          <div class='col-sm-4'>
                            <input type='password' class='form-control' id='pw' name='pw' placeholder='Enter password'>
                          </div>
                        </div>
                        <div class='form-group'>
                          <div class='col-sm-offset-2 col-sm-4'>
                            <div class='checkbox'>
                              <label>
                                <input type='checkbox' name='remember'>I'm Lazy
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class='form-group'>
                          <div class='col-sm-offset-2 col-sm-4'>
                            <button type='submit' class='btn btn-success'>Sign in</button>
                          </div>
                        </div>
                      </form>";
                              
      return $this->html;
    }

  }

