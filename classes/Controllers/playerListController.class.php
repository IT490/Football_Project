<?php

class playerListController extends Controller
{

	public function get()
	{
	//	$client = new MongoDB\Client;
	//	$nfl = $client->nfl;

		//foreach($nfl->listCollections() as $collection)
		//{
		//	var_dump($collection);
		//}

		$view = new playerListView;
		var_dump($view);
		$this->html .= $view->getHTML();
	}

	public function getPlayerList()
	{
		//rabbitMQ request
		
	}
}
