<?php
class Ask_model extends CI_Model
{	
    public function __construct() {
        parent::__construct();
    }
	
	public function getCategory()
    { 
        $result = $this->db->get('FAQS');		
        return $result->result_array();		             
    }
	
    public function getAsk()
    { 
		$res = [];
		$this->db->select('*');
		$cat = $this->db->get('FAQS');
		$cat = $cat->result_array();
		$res["category"] = [];
		$res["content"] = [];		
		if( !empty($cat) )
		{		
			$catArray = array();
			foreach($cat as $t){
				//$catArray[] = $t["id"];
				array_push($res["category"],$t);
				$result = $this->db->where("catId",$t["id"])->get('terms')->result_array();
				array_push($res["content"],$result);
			}
		}
		return $res;
		       
    }
	
}