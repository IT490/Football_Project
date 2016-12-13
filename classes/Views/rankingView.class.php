<?php

require_once __DIR__ .  '/../../vendor/autoload.php';

class rankingView extends View {

	public function getHTML() {

		$this->html .= '<h2>NFL Weekly Rankings | <i>Top 15 Players</i></h2>';
	
		return $this->html;
	}
}
