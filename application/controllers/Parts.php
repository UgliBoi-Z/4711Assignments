<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Parts extends Application {

    /**
     * index for Parts page. Collects all records from the robots and parts models
     */
    public function index() {
        $this->data['pagebody'] = 'parts';
        $role = $this->session->userdata('userrole');
        if ((strcmp($role, "Worker") != 0) &&
                (strcmp($role, "Boss") != 0) &&
                (strcmp($role, "Supervisor") != 0)) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
        }

        $this->load->database();
        $query = $this->db->query('SELECT * FROM parts');
        $parts = $query->result_array();

        $this->load->library('table');

        $parms = array(
            'table_open' => '<table class = "gallery">',
            'cell_start' => '<td class = "oneimage">',
            'cell_alt_start' => '<td class = "oneimage">'
        );

        $this->table->set_template($parms);

        $part_heads = array();
        $part_torsos = array();
        $part_feet = array();
        foreach ($parts as $part) {
            if ($part['part_code'] == "a1" || $part['part_code'] == "b1" || $part['part_code'] == "c1") {
                $part_heads[] = array('part_id' => $part['part_id'],
                    'part_code' => $part['part_code'],
                    'part_ca' => $part['part_ca'],
                    'built_at' => $part['built_at'],
                    'date_built' => $part['date_built']);
            } else if ($part['part_code'] == "a2" || $part['part_code'] == "b2" || $part['part_code'] == "c2") {
                $part_torsos[] = array('part_id' => $part['part_id'],
                    'part_code' => $part['part_code'],
                    'part_ca' => $part['part_ca'],
                    'built_at' => $part['built_at'],
                    'date_built' => $part['date_built']);
            } else if ($part['part_code'] == "a3" || $part['part_code'] == "b3" || $part['part_code'] == "c3") {
                $part_feet[] = array('part_id' => $part['part_id'],
                    'part_code' => $part['part_code'],
                    'part_ca' => $part['part_ca'],
                    'built_at' => $part['built_at'],
                    'date_built' => $part['date_built']);
            } else {
                continue;
            }
        }
        $this->data['heads'] = $part_heads;
        $this->data['torso'] = $part_torsos;
        $this->data['feet'] = $part_feet;
        $this->render();
    }

    public function item($id) {
// view we want shown
        $this->data['pagebody'] = 'justone';
        $this->load->database();
        $source = $this->inventory->getSinglePart($id);

        $this->data['date_built'] = $source[0]['date_built'];
        $this->data['part_id'] = $source[0]['part_id'];
        $this->data['part_code'] = $source[0]['part_code'];
        $this->data['part_ca'] = $source[0]['part_ca'];

        $this->render();
    }

    public function buy() {
        //$url = "https://umbrella.jlparry.com/work/mybuilds?key=".$key;
        //need to get the actuall session KEY
        $url = "https://umbrella.jlparry.com/work/buybox?key=3b7680";

        $response = file_get_contents($url);
        $parts = json_decode($response, true);
        foreach ($parts as $part) {
            $data = array(
                'part_ca' => $part['id'],
                'part_id' => $part['model'],
                'part_code' => $part['piece'],
                'built_at' => $part['plant'],
                'date_built' => $part['stamp']
            );

            $this->Inventory->insertPart($data);
        }
    }

    public function build() {
        $response = file_get_contents('https://umbrella.jlparry.com/work/mybuilds?key=3b7680');
        $parts = json_decode($response, true);
        foreach ($parts as $part) {
            $data = array(
                'part_ca' => $part['id'],
                'part_id' => $part['model'],
                'part_code' => $part['piece'],
                'built_at' => $part['plant'],
                'date_built' => $part['stamp']
            );
            $this->Inventory->insertPart($data);
        }
    }

}
