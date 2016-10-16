<?php

class playerListView extends View
{
	public function getHTML()
	{
		//session_start();

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
