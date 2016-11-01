<?php

class playerListController extends Controller
{
	public function get()
  {	
    session_start();
    
    if ($_SESSION['token']) {
		  $view = new playerListView;
      $this->html .= $view->getHTML();
    }

    else { $this->html = "<h2>Your Token has either expired or you are a hacker!</h2>"; }
	}

}
