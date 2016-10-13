<?php

class playerListView extends View
{
	//store the array in session

 	public function getHTML()
	{
		$this->html .=
		"
		<html>
		<div>test</div>
		</html>
		";

		return $this->html;
	}
}
