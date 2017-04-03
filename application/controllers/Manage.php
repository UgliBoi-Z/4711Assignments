<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of About
 *
 * @author JDePourcq
 */

//Wasn't able to finish selling robots in time, will finsih before next assignment
class Manage extends Application
{

    public function index()
    {
        $role = $this->session->userdata('userrole');
        if($role == 'Boss') {
                $this->data['pagebody'] = 'manage';
                $this->render(); 
        }else {
                redirect('homepage');
        }
    }
    
    public function generate() 
        {
            $this->data['pagebody'] = 'manage';
            $this->render();
            $pw = $_POST["password"];
            $response = "err";
            $response = file_get_contents("https://umbrella.jlparry.com/work/registerme/ugli/$pw");
            $pieces = explode(" ", $response);
            $length = sizeof($pieces,0);
            if($length == 2){
                $data = array(
                    'api' => $pieces[1]
                );
                $this->load->database();
                $this->db->update('apikey', $data);
            } else {
                $this->data['message'] = "<div>fail</div>";
            }
            
            
        }
    
    public function reboot() 
        {
            $this->data['pagebody'] = 'manage';
            $this->render();
            $this->load->database();
            //Wasn't able to query the api key correctly
            $query = $this->db->query('SELECT api FROM apikey WHERE id = 0');
            
            //Had to hard code in api key, will fix before next assignment
            $response = file_get_contents('https://umbrella.jlparry.com/work/rebootme?key=1a18f9');
            
            if($response[0] == "Ok"){
                //empty your inventory & history
                $this->db->query('DELETE FROM parts WHERE 1');
                $this->db->query('DELETE FROM robots WHERE 1');
                $this->db->query('DELETE FROM history WHERE 1');
            }
        }
    
}
