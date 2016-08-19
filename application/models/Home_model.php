<?php
class Home_model extends CI_Model
{
	
    public function __construct() {
        parent::__construct();
    }
	
    public function getProducts()
    { 
        $query = $this->db->query("select id, titlege, titleen, coverimage, changedprice from products where changedprice > 0 order by id desc limit 24");
        return $query->result_array();             
    }
	
	public function getSaleProducts()
    { 
        $query = $this->db->query("select id, titlege, titleen, coverimage, price from products where sale > 0 order by id desc limit 24");
        return $query->result_array();             
    }
	
	public function getLastProducts()
	{
		$query = $this->db->query("select id, titlege, titleen, coverimage, price from products order by id desc limit 24");
        return $query->result_array(); 
	}
	
	public function getServices()
	{
		$query = $this->db->query("select id, titlege, titleen, coverimage, textge, texten from services  order by id desc limit 24");
        return $query->result_array(); 
	}
	
	public function getPopularProducts()
	{
		$query = $this->db->query("select id, titlege, titleen, coverimage, price from products  order by seen desc limit 24");
        return $query->result_array(); 
	}
	
	public function subscribe( $data )
	{
		$result = $this->db->insert('subscribers', $data);		
        return $result;
	}
		
	public function getServiceCategories()
	{
		$result = $this->db->get('servicecategory');		
        return $result->result_array();	
	}
	
	public function getWidgets()
	{
		$result = $this->db->query('select * from widgets order by id desc limit 4');		
        return $result->result_array();	
	}
	
	public function getServTexts()
	{
		$result = $this->db->get('servmain');		
        return $result->result_array();	
	}
	
	public function getPrText()
	{
		$result = $this->db->get('prmain');		
        return $result->result_array();	
	}
	
	public function getIcons()
	{
		$result = $this->db->get('icons');		
        return $result->result_array();	
	}
	
	public function getSocIcons()
	{
		$result = $this->db->get('socialicons');		
        return $result->result_array();	
	}
	
	public function getBrands()
	{
		$result = $this->db->query('SELECT distinct make FROM `VehicleModelYear`');		
        return $result->result_array();	
	}
	
	public function getModels( $data )
	{
		$brand = $data["brand"];
		$result = $this->db->query("SELECT distinct model FROM `VehicleModelYear` WHERE make='$brand'");		
        return $result->result_array();	
	}
	
	public function getLogoes()
	{
		$result = $this->db->get('logoes');		
        return $result->result_array();	
	}
	
	public function getWorkTime()
	{
		$result = $this->db->get('worktime');		
        return $result->result_array();	
	}
	
	public function getMain()
	{
		$result = $this->db->get('main');
        return $result->result_array();	
	}
	
	public function getLastService()
	{
		$result = $this->db->query('select id, textge, texten from services order by id desc limit 1');
        return $result->result_array();	
	}
}