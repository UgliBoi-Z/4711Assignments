<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
{
	// loads the initial page and grabs the info needed
	public function index()
	{
		$this->data['pagebody'] = 'welcome_message'; // Linking which View to use

		$source = $this->inventory->all();
		$records = array ();
		$sumParts = 0;
		$sumAssemble = 0;
		$spent = 0;
		$sold = 0;
		$earned = 0;

		// running through the index and grabbing the information that's needed
		foreach ($source as $record)
		{
			$sumParts += intval($record['part']);
			/* As of right now, these are commented out because our model does not have any fields for fully
			   assembled robots, funds that's been used for spending, and funds for robots sold

			$sumAssemble += intval($record['assemble']);
			$spent += intval($record['price']);
			$sold += intval($record['sold']); */
		}

		$earned = $sold - $spent;

		$records[] = array ('part' => $sumParts, 'assembled' => $sumAssemble, 'fundSpent' => $spent
							,'fundEarned' => $earned);

		$this->data['records'] = $records;

		$this->render();
	}

}

?>
