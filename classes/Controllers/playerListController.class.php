<?php

class playerListController extends Controller
{
	public function get()
	{	
		$view = new playerListView;
		$this->html .= $view->getHTML();
	}

}
