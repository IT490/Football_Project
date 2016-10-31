<?php


class playerProfileController extends Controller
{

	public function get()
	{
		$player = new player($_REQUEST["player"]);
		$this->html = $player->getHTML();
	}
}
