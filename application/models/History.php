<?php


class History extends CI_Model{
   
    var $data = array(
        array('id' => '1', 'purchases' => '2 robots', 'assemblies' => '3', 'shipments' => '3', 'dtTrans' => 'mm/dd/yyyy 12:00'),
        array('id' => '2', 'purchases' => '3 robots', 'assemblies' => '1', 'shipments' => '0', 'dtTrans' => 'mm/dd/yyyy 24:00')
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