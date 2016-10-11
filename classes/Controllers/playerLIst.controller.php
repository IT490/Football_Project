<?php

class PlayerListController extends Controller
{

	public function get()
	{
		$view = new PlayerListView;
		$this->html .= $view->getHTML();
	}

	public function getPlayerList()
	{
		//rabbitMQ request
		
	}
}
