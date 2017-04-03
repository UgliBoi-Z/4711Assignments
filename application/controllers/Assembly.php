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
		$this->load->database();
		$query = $this->db->query('SELECT * FROM parts');
		$parts = $query->result_array();
		$list = array();
		foreach ($parts as $part)
		{
			$list[] = array (
			'part_id' => $part['part_id'],
			'part_code' => $part['part_code'],
			'part_ca' => $part['part_ca'],
			'built_at' => $part['built_at'],
			'date_built' => $part['date_built'],
                        'part_model' => $part['part_model']);
		}
		$this->data['partlist'] = $list;
		$this->render();
	}

	public function assemble() 
	{
		$data = $this->input->post('selected');
		if (count($data) == 3) {

		$this->load->database();
		$newBot = array();		
		
		foreach ($data as $sel) 
		{
			$query = $this->db->query('SELECT * FROM parts WHERE part_id = ' . $sel);
			$row = $query->row();
			$num = substr($row->part_code, -1);	
			if (!isset($newBot['top']) && strcmp($num, "1") == 0) {
					$newBot['top'] = $row->part_code;		
			} else if (!isset($newBot['torso']) && strcmp($num, "2") == 0) {
					$newBot['torso'] = $row->part_code;
			} else if (!isset($newBot['bottom']) && strcmp($num, "3") == 0) {
					$newBot['bottom'] = $row->part_code;
			}
		}
		if (count($newBot) == 3) {
			$bot = array(
        		'top' => $newBot['top'],
        		'torso' => $newBot['torso'],
       			'bottom' => $newBot['bottom']
			);

			$this->db->insert('robots', $bot);

			foreach ($data as $sel) {
			$query = $this->db->query('SELECT * FROM parts WHERE part_id = ' . $sel);
			$row = $query->row();
			$history = array(
        		'partType' => $row->part_code,
        		'partId' => $row->part_ca,
       			'actionType' => "Used"
			);

			$this->db->insert('history', $history);
			$this->db->query('DELETE FROM parts WHERE part_id = ' . $sel);
			}
		}
		}
		$this->load->helper('url');
		redirect(site_url("assembly"),'refresh');
	}

}
