<?php

require_once __DIR__ . '/../../vendor/autoload.php';

class playerModel
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

    $ch = curl_init();
    $url = "http://www.nflarrest.com/api/v1/player/arrests/" . $this->name;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close();

    $arrest_data = json_decode($output, true);

		if ($result_count == 1)
		{
			// build player profile
      $this->html .= '<div class="panel panel-default" style="margin-top: 60px; background-color: #E0E0E0; width: 1150px;">
					              <div class="row">
						              <div class="col-sm-2">
							              <div class="main-content">
								              <img src=' . "\"" . $array[0]["PhotoUrl"] . "\"" . ' width="150px" height="175px" style="margin-bottom: 10px; margin-left: 10px;"/>
							              </div>
						              </div>
						              <div class="col-sm-10">
							              <h3><strong>'.$array[0]['Name'].'</strong></h3>
							                <div class="row">
								                <div class="col-sm-12">'.
									                '<p><i><strong>Age:</strong></i> '. $array[0]['Age'].'<br>'.
									                   '<i><strong>Birthdate: </strong></i> '. $array[0]['BirthDateString'].'<br>'.
									                   '<i><strong>Position: </strong></i>  '. $array[0]['Position'].'<br>'.
									                   '<i><strong>Team: </strong></i>' . $array[0]['CurrentTeam'].'<br>'.
									                   '<i><strong>College: </strong></i>'. $array[0]['College'].'<br>'.
									                   '<i><strong>Experience: </strong></i>' .$array[0]['Experience'].' years <br>
                                   </p>
								                 </div>	
							                </div>
						               </div>
					              </div>';
    
/*$ch = curl_init(); //initialize curl channel
 *$url = "WHATEVER THE URL IS FOR API" . Name or whatever //create url string
 *curl_setopt($ch, CURLOPT_URL, $url); //set the url
 *curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //set the return options
 *$output = curl_exec($ch); //execute the curl request
 *curl_close($ch); //close the connection channel
 *$response = json_decode($output) //decode the json object it returns, this is not regular json if you vardump you will see that curl returns an object (StdClass Object) 
 */
    }
    if ($arrest_data === NULL) 
      $this->html .= '<div class="panel-default" style="margin-top: 40px; width: 1150px;">
                        <h3>This player has never been arrested! Amazing...</h3>
                      </div>';
    else {
      $this->html .= '<div class="panel-default" style="margin-top: 40px; width: 1150px;">
                        <div class="panel-header">
                          <h3 style="margin-left: 10px;">Arrest Information</h3>
                        </div>
                        <ul class="list-group">';
      foreach($arrest_data as $record) {
        $this->html .= '<li class="list-group-item">
                          <h4><span><i class="fa fa-thumbs-down"></i></span><i class="text-danger">&nbspOn ' . $record["Date"] . " " . $this->name . ' was arrested for ' . $record["Category"] . '</i></h4>' . 
                          '<strong>Description: </strong>' . $record["Description"] . '</br>' .
                          '<strong>Outcome: </strong>' . $record["Outcome"] .
                       '</li>';
      }

      $this->html .= '</ul></div>';
    }

    return $this->html;
  }
}
