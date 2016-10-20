<?php

require_once __DIR__ .  '/../../vendor/autoload.php';

class playerListView extends View
{
	public function getHTML()
	{
		$client = new MongoDB\Client;
		$nfl = $client->nfl;

		$collection = $client->nfl->Players;
	
		$this->html .= '<div class="page-header" style="margin-top: 60px;">
				<h2 class>&nbsp<span><i class="fa fa-lg fa-archive"></i></span>&nbspPlayer List</h2>
				</div>';

		$this->html .= '<br><div class="container">
					<table class="table table-hover table-responsive">
						<thead>
							<tr>
								<th>Name</th>
								<th>Team</th>
								<th>College</th>
								<th>Position</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>	
				';
	
		foreach ($collection->find() as $document)
		{
			$this->html .= '<tr><td>'. '<a href="index.php?controller=playerProfileController&player='.$document["Name"].'">'.
					$document["FirstName"]. ' ' . $document["LastName"].
					'</td><td>'. 
					$document["CurrentTeam"].
					'</td><td>'.
					$document["College"].
					'</td><td>'.
					$document["Position"].
					'</td><td>'.
					$document["CurrentStatus"]. 
					'</td></a></tr>';
		}

		$this->html .= '</tbody></table></div>';
				

		return $this->html;
	}
}
