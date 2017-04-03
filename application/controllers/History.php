<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['pagebody'] = 'history';
		$this->load->database();
		$query = $this->db->query('SELECT * FROM history');
		$history = $query->result_array();
		$list = array();
		foreach($history as $transac) {
			$list[] = array (
			'id' => $transac['id'],
			'partType' => $transac['partType'],
			'partId' => $transac['partId'],
			'actionType' => $transac['actionType'],
			'creationTime' => $transac['creationTime']
			);
		}
		$this->data['transacHistory'] = $list;
		$this->render();
	}

}
