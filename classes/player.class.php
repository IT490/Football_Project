<?php

require_once __DIR__ . '/../vendor/autoload.php';

class player
{

	private $name="";
	private $html="";

	public function __construct($playerName)
	{
		$this->name = $playerName;
	}

	public function getHTML()
	{
		// Mongo goes here
		$client = new MongoDB\Client;
		$nfl = $client->nfl;

		$collection = $client->nfl->Players;

		$documents = $collection->find( [ 'Name' =>  $this->name  ]);
		$array = $documents->toArray();
		$result_count = count($array);

		if ($result_count == 1)
		{
			// build player profile
                	$this->html .= '<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="main-content">
								<img src=' . "\"" . $array[0]["PhotoUrl"] . "\"" . '/>
							</div>
						</div>
						<div class="col-sm-10">
							<h3>'.$array[0]['Name'].'</h3>
							<div class="row">
								<div class="col-sm-12">'.
									$array[0]['Age'].'<br>'.
									$array[0]['BirthDateString'].'<br>'.
									$array[0]['Position'].'<br>'.
									$array[0]['CurrentTeam'].'<br>'.
									$array[0]['College'].'<br>'.
									$array[0]['Experience'].'<br>
								</div>	
							</div>
						</div>
					</div>';

					//$curl = curl_init();
		}

		return $this->html;
	}
}
