<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
{
	// loads the initial page and grabs the info needed
	public function index()
	{
		$this->data['pagebody'] = 'welcome_message'; // Linking which View to use

		$json = json_decode(file_get_contents('https://umbrella.jlparry.com/info/scoop/ugli'), true);
		$source = $this->inventory->all();
		$records = array ();
		$sumParts = $json['parts_made'];
		$sumAssemble = $json['bots_built'];
		$spent = $json['boxes_bought'] * 100;
		$sold = 0;
		$net = 0;
		$current = $json['balance'];

		$net = $sold - $spent;

		$records[] = array ('part' => $sumParts, 'assembled' => $sumAssemble, 'fundSpent' => $spent
							,'fundNet' => $net, 'fundCurrent' => $current);

		$this->data['records'] = $records;

		$this->render();
	}

}

?>
