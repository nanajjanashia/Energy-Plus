<?php
class Contact_model extends CI_Model
{	
    public function __construct() {
        parent::__construct();
    }
	
    public function getContact()
    { 
        $result = $this->db->get('contact');		
        return $result->result_array();		             
    }
	
}