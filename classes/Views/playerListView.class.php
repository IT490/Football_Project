<?php

require_once __DIR__ .  '/../../vendor/autoload.php';

class playerListView extends View
{
	public function getHTML()
	{
		$client = new MongoDB\Client;
		$nfl = $client->nfl;

		$collection = $client->nfl->Players;
		
		foreach ($collection->find() as $document)
		{
			$this->html .= '<br><br>'. $document["FirstName"] . ' ' . $document["LastName"] .' <br>';

		}

		return $this->html;
	}
}
