<?php
class Service_model extends CI_Model
{
	
    public function __construct() {
        parent::__construct();
    }
	
    public function getServiceCategory()
    { 
        $result = $this->db->get('servicecategory');		
        return $result->result_array();		             
    }
	
	public function getServices()
    { 
        $result = $this->db->query('SELECT s.id, s.titlege, s.titleen, s.coverimage, k.classname FROM `services` as s inner join servicecategory as k on s.categoryId=k.id');		
        return $result->result_array();		             
    }
	
	public function getService( $id )
	{
		$result = $this->db->get_where('services', array('id' => $id));
		return $result->result_array();	
	}
	
	public function getServiceForFooter()
	{
		$result = $this->db->query('select id, titlege, titleen from services order by id desc limit 20');
		return $result->result_array();	
	}
	
}