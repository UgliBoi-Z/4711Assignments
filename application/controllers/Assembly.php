<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application
{


	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['pagebody'] = 'assembly';
		$parts = $this->inventory->all();
		$list = array();
		foreach ($parts as $part)
		{
			$list[] = array (
			'model' => $part['model'],
			'part' => $part['part'],
			'piece' => $part['piece'],
			'CA' => $part['CA'],
			'mug' => $part['mug'],			
			'plant' => $part['plant'],
			'date' => $part['date']);
		} 
		$this->data['partlist'] = $list;
		$this->render(); 
	}

}
