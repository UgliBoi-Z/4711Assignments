<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
{
	
	public function index()
	{
		$this->data['pagebody'] = 'welcome_message'; // Linking which View to use
		$this->render(); 
	}

}
