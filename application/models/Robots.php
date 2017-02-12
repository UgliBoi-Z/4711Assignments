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
class Robots extends CI_Model{

    var $data = array(

        array('id' => '1', 'composition' => array('a1', 'a2', 'a3')),
	array('id' => '2', 'composition' => array('m1', 'm2', 'm3')),
        array('id' => '3', 'composition' => array('w1', 'w2', 'w3')),
        array('id' => '4', 'composition' => array('b1', 'r2', 'w3'))

    );

    // Constructor
    public function __construct()
    {
            parent::__construct();
    }

    // retrieve a single piece by the ID
    public function get($which)
    {
            // iterate over the data until we find the one we want
            foreach ($this->data as $record)
                    if ($record['id'] == $which)
                            return $record;
            return null;
    }

    // retrieve all of parts
    public function all()
    {
            return $this->data;
    }

}
