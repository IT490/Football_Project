<?php


class playerProfileController extends Controller
{

	public function get()
	{
		echo('<br><br>');
	//	var_dump($_REQUEST["player"]);
		echo('<br><br>');
		$player = new player($_REQUEST["player"]);
	//	var_dump($player);
		echo('<br><br>');
		$this->html = $player->getHTML();
	}
}
