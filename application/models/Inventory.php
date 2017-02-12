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
class Inventory extends CI_Model{
    var $data = array(
        //Household Robot
        array('id' => '1', 'model' => 'a', 'part' => '1', 'piece' => 'a1',
            'CA' => "00000000", 'mug' => 'a1.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Household Robot top - a1'),
        array('id' => '2', 'model' => 'a', 'part' => '2', 'piece' => 'a2',
            'CA' => "00000000", 'mug' => 'a2.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Household Robot middle - a2'),
        array('id' => '3', 'model' => 'a', 'part' => '3', 'piece' => 'a3',
            'CA' => "00000000", 'mug' => 'a3.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Household Robot bottom - a3'),

        array('id' => '4', 'model' => 'b', 'part' => '1', 'piece' => 'b1',
            'CA' => "00000000", 'mug' => 'b1.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Household Robot top - b1'),
        array('id' => '5', 'model' => 'b', 'part' => '2', 'piece' => 'b2',
            'CA' => "00000000", 'mug' => 'b2.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Household Robot middle - b2'),
        array('id' => '6', 'model' => 'b', 'part' => '3', 'piece' => 'b3',
            'CA' => "00000000", 'mug' => 'b3.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Household Robot bottom - b3'),

        array('id' => '7', 'model' => 'c', 'part' => '1', 'piece' => 'c1',
            'CA' => "00000000", 'mug' => 'c1.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Household Robot top - c1'),
        array('id' => '8', 'model' => 'c', 'part' => '2', 'piece' => 'c2',
            'CA' => "00000000", 'mug' => 'c2.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Household Robot middle - c2'),
        array('id' => '9', 'model' => 'c', 'part' => '3', 'piece' => 'c3',
            'CA' => "00000000", 'mug' => 'c3.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Household Robot bottom - c3'),
        //Butler Robot
        array('id' => '10', 'model' => 'm', 'part' => '1', 'piece' => 'm1',
            'CA' => "00000000", 'mug' => 'm1.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Butler Robot top - m1'),
        array('id' => '11', 'model' => 'm', 'part' => '2', 'piece' => 'm2',
            'CA' => "00000000", 'mug' => 'm2.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Butler Robot middle - m2'),
        array('id' => '12', 'model' => 'm', 'part' => '3', 'piece' => 'm3',
            'CA' => "00000000", 'mug' => 'm3.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Butler Robot bottom - m3'),

        array('id' => '13', 'model' => 'r', 'part' => '1', 'piece' => 'r1',
            'CA' => "00000000", 'mug' => 'r1.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Butler Robot top - r1'),
        array('id' => '14', 'model' => 'r', 'part' => '2', 'piece' => 'r2',
            'CA' => "00000000", 'mug' => 'r2.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Butler Robot middle - r2'),
        array('id' => '15', 'model' => 'r', 'part' => '3', 'piece' => 'r3',
            'CA' => "00000000", 'mug' => 'r3.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Butler Robot bottom - r3'),
        //Companion robot
        array('id' => '16', 'model' => 'w', 'part' => '1', 'piece' => 'w1',
            'CA' => "00000000", 'mug' => 'w1.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Companion Robot top - w1'),
        array('id' => '17', 'model' => 'w', 'part' => '2', 'piece' => 'w2',
            'CA' => "00000000", 'mug' => 'w2.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Companion Robot middle - w2'),
        array('id' => '18', 'model' => 'w', 'part' => '3', 'piece' => 'w3',
            'CA' => "00000000", 'mug' => 'w3.jpeg', 'plant' => 'UgliBoi-Z', 'date' => 'mm/dd/yyyy 12:00', 'what' => 'Companion Robot bottom - w3'),
    );

    // Constructor
    public function __construct()
    {
            parent::__construct();
    }
    // retrieve a single piece by the two-letter designation
    public function get($which)
    {
            // iterate over the data until we find the one we want
            foreach ($this->data as $record)
                    if ($record['piece'] == $which)
                            return $record;
            return null;
    }
    // retrieve all of parts
    public function all()
    {
            return $this->data;
    }

}
