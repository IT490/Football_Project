<?php

require_once __DIR__ .  '/../../vendor/autoload.php';

class playerListView extends View
{
	public function getHTML()
	{
		$client = new MongoDB\Client;
		$nfl = $client->nfl;

		$filter = array();
		$options = ['sort' => ['Name' => 1]];

		$collection = $client->nfl->Players;
		$sorted = $collection->find($filter, $options);
	
		$this->html .= '<style type="text/css"> .table-row{cursor:pointer;}</style>';
		$this->html .= '<div class="page-header" style="margin-top: 60px;">
				<h2 class>&nbsp<span><i class="fa fa-lg fa-archive"></i></span>&nbspPlayer List</h2>
				</div>';

		$this->html .= "<div class='panel-default' style='margin-top: 40px; width: 500px;'>  
		                         <h4>Search by Player</h4>                                          
		                          <form class='form-inline' method='post' action='index.php?controller=arrestController'>                                             
			                           <div class='form-group'>                                         
			                              <div class='col-sm-12 input-group'>                            
				                               <span class='input-group-addon><i class='fa fa-search'></i></span>
				                                <input type='text' class='form-control' id='search' name='search' placeholder='Search by Player name'>
					                             </div>                                                         
					                            </div>                                                           
						                           <div class='form-group'>                                         
						                              <div class='col-sm-4'>                                         
							                               <button type='submit' class='btn btn-success'>Search</button>
							                              </div>                                                         
								                           </div                                                            
								                        </div> ";

		$this->html .= '<br><div class="container">
					<table class="table table-hover table-responsive">
						<thead>
							<tr>
								<th>Name</th>
								<th>Team</th>
								<th>College</th>
								<th>Position</th>
								<th>Fantasy Position</th>
							</tr>
						</thead>
						<tbody>	
				';
	
		foreach ($collection->find($filter, $options) as $document)
		{
		                        $this->html .= '<tr class="table-row" data-href="index.php?controller=playerProfileController&player='.$document["Name"].'"><td>'.
					$document["FirstName"]. ' ' . $document["LastName"].
					'</td><td>'. 
					$document["CurrentTeam"].
					'</td><td>'.
					$document["College"].
					'</td><td>'.
					$document["Position"].
					'</td><td>'.
					$document["FantasyPosition"]. 
					'</td></a></tr>';
		}

		$this->html .= '</tbody></table></div>';
		$this->html .= '<script type="text/javascript">
				$(document).ready(function($){
					$(".table-row").click(function(){
						window.document.location = $(this).data("href");
					});
				});
				</script>';
				

		return $this->html;
	}
}
