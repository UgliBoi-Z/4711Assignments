<?php

/*
 * Mock Database for robot parts
 * 6 robot models designated by a single letter
 * a b c - household robot
 * m r - butler robot
 * w - companion robot
 * parts are split into 3
 * 1 - top
 * 2 - middle
 * 3 - bottom
 */

class Inventory extends CI_Model {

    public function __construct() {
        parent::__construct('part_code', 'part_ca', 'built_at', 'date_built', 'part_id');
    }

    //retrieve all parts 
    public function count() {
        $this->db->from('parts');
        $query = $this->db->get();
        $rowcount = $query->num_rows();
        return $rowcount;
    }

    public function getAllParts() {
        //$this->db->get('parts');
        $this->db->from('parts');
        $this->db->order_by("part_code", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getSinglePart($id) {
        $this->db->from('parts');
        $this->db->where('part_id', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function removeSinglePart($id) {
        $this->db->delete('parts', array('part_code' => $id)); // Produces: // DELETE FROM mytable  // WHERE id 
    }

    public function insertPart($data) {
        $this->db->insert('parts', $data);
    }

    public function removeAllParts() {
        $this->db->empty_table('parts');
    }

}
