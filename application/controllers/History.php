<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
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
		$this->data['pagebody'] = 'history';
		$source = $this->transacHistory->all();
		$list = array();
		foreach($source as $transac) {
			$list[] = array (
			'id' => $transac['id'],
			'purchases' => $transac['purchases'],
			'assemblies' => $transac['assemblies'],
			'shipments' => $transac['shipments'],
			'dtTrans' => $transac['dtTrans']
			);
		}
		$this->data['transacHistory'] = $list;
		$this->render();
	}

}
