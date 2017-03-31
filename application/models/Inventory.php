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
  
     public function __construct()
     {
                parent::__construct('part_code', 'part_ca', 'built_at', 'date_built', 'part_id');
     }

}
