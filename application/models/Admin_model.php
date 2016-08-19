<?php
class Admin_model extends CI_Model
{
	
    public function __construct() {
        parent::__construct();
    }

	/*public function updateCopyright( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('copyright', $data);
	}
	public function getGallery( $id )
	{	
		$query = $this->db->get_where('galeries', array('id' => $id));
        return $query->result();			 
	}
	*/
	public function getLogoes()
	{
		$result = $this->db->get('logoes');		
        return $result->result_array();
	}
	
	public function getworkTimes()
	{
		$result = $this->db->get('worktime');		
        return $result->result_array();
	}
	
	public function getWidgets()
	{
		$result = $this->db->get('widgets');		
        return $result->result_array();
	}
		
	public function editWidget( $id )
	{	
		$query = $this->db->get_where('widgets', array('id' => $id));
        return $query->result_array();			 
	}
	
	public function updateWidget( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('widgets', $data);
		return $result;
	}
	
	public function insertWidget( $data )
	{	
		$result = $this->db->insert('widgets', $data);
        return $result;
	}
	
	public function deleteWidget( $id )
	{		
		$this->db->where('id', $id);
		$result = $this->db->delete('widgets');
		return $result;	
	}
	
	public function getMain()
	{
		$result = $this->db->get('main');		
        return $result->result_array();
	}
	
	public function getServMainText()
	{
		$result = $this->db->get('servmain');		
        return $result->result_array();
	}
	
	public function updateServText( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('servmain', $data);
		return $result;
	}
	
	public function getFaqs()
	{
		$result = $this->db->get('FAQS');		
        return $result->result_array();
	}
	
	public function getFaqsByOne($id)
	{	
		$query = $this->db->get_where('FAQS', array('id' => $id));
        return $query->result_array();			 
	}
	
	public function updateFaqs( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('FAQS', $data);
		return $result;
	}
	
	public function insertFAQS( $data )
	{	
		$str = md5(uniqid(rand(), true));
		$data["classname"] = "cls".$str;
		$result = $this->db->insert('FAQS', $data);
        return $result;
	}
	
	public function deleteFAQS( $id )
	{		
		$this->db->where('id', $id);
		$result1 = $this->db->delete('FAQS');
		
		$this->db->where('catId', $id);
		$result2 = $this->db->delete('terms');
		
		return $result1;	
	}
	
	public function searchFAQS( $data )
	{	$cat = $data["catid"];
		$query = $this->db->query("SELECT * FROM `terms` WHERE catId = $cat");
        return $query->result_array();			 
	}
	
	public function insertQT( $data )
	{	
		$result = $this->db->insert('terms', $data);
        return $result;
	}
	
	public function editQT( $id )
	{	
		$query = $this->db->get_where('terms', array('id' => $id));
        return $query->result_array();			 
	}
	
	
	public function updateQT( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('terms', $data);
		return $result;
	}
	
	public function deleteQT( $id )
	{		
		$this->db->where('id', $id);
		$result = $this->db->delete('terms');
		return $result;	
	}
	
	public function getIcons()
	{
		$result = $this->db->get('icons');		
        return $result->result_array();
	}
	
	public function getIcon( $id )
	{	
		$query = $this->db->get_where('icons', array('id' => $id));
        return $query->result_array();			 
	}
		
	public function updateIcon( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('icons', $data);
		return $result;
	}
	
	public function insertIcon( $data )
	{	
		$result = $this->db->insert('icons', $data);
        return $result;
	}
		
	public function getSocIcons()
	{
		$result = $this->db->get('socialicons');		
        return $result->result_array();
	}
	
	public function getSocIcon( $id )
	{	
		$query = $this->db->get_where('socialicons', array('id' => $id));
        return $query->result_array();			 
	}
	
	public function updateSocIcon( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('socialicons', $data);
		return $result;
	}
	
	public function deleteSocIcon( $id )
	{		
		$this->db->where('id', $id);
		$result = $this->db->delete('socialicons');
		return $result;	
	}
	
	public function deleteIcon( $id )
	{		
		$this->db->where('id', $id);
		$result = $this->db->delete('icons');
		return $result;	
	}
	
	public function getPrMain()
	{
		$result = $this->db->get('prmain');		
        return $result->result_array();
	}
	
	public function updatePrText( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('prmain', $data);
		return $result;
	}
	
	public function changeLogo( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('logoes', $data);
		return $result;
	}
	
	public function updateWorkTime( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('worktime', $data);
		return $result;
	}
	
	public function updateMain( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('main', $data);
		return $result;
	}
	
	public function saveMainCategory( $data )
	{	
		$data["parent"] = "0";
		$result = $this->db->insert('category', $data);		
        return $result;
	}
	
	public function saveSubCategory( $data )
	{	
		$result = $this->db->insert('category', $data);		
        return $result;
	}
	
	public function getMainCategory()
	{	
		$query = $this->db->query('select * from category where parent=0');
        return $query->result();			 
	}
	
	public function getSubCategory()
	{	
		$query = $this->db->query('select * from category where parent!=0');
        return $query->result();			 
	}
	
	public function getFullSubCategories()
	{	
		$query = $this->db->query('select * from category where parent!=0');
        return $query->result();		
	}
	
	public function getProducts()
	{
		$query = $this->db->query('select id, titlege, titleen from products order by id desc');
        return $query->result();			 
	}
	
	public function getProduct( $id )
	{	
		$query = $this->db->get_where('products', array('id' => $id));
        return $query->result();			 
	}
	
	public function getCategory( $id )
	{	
		$category = [];
		$this->db->select('categoryId');
		$cat = $this->db->get_where('products', array('id' => $id));
		$cat = $cat->result_array();
		
		$category["main"] = $cat[0]["categoryId"];
		$mquery = $this->db->get_where('category', array('id' => $cat[0]["categoryId"]));
        $mcat = $mquery->result_array();
		
		if( $mcat[0]["parent"] != 0 )
		{
			$category["sub"] = $cat[0]["categoryId"];
			$query2 = $this->db->get_where('category', array('id' => $mcat[0]["parent"]));
			$mcat2 = $query2->result_array();
			$category["main"] = $mcat2[0]["id"];
		}
		return $category;
	}
	
	public function insertProduct( $data )
	{	
		$smallimages = "";
		$data["bigimages"] = str_replace("bigimg=", "", $data["bigimages"]);
		$bigimgs = explode("&",$data["bigimages"]);
		
		foreach( $bigimgs as $k=>$v )
		{
			if(isset($v)){
				$mainImg = $v;
				$mainposter = $mainImg;

				$forEdit = $mainImg;
				$la = 1;
				$ex = explode(".", $forEdit);
				$ext = $ex[1];
				if($ext == "png" || $ext == "PNG"){
					$la = 2;
				}
							
				$img_link = "images/resource/".$forEdit;
			
				
				$filename = $img_link;
			
				list($width, $height) = getimagesize($filename);

				$ratio = $width/$height;
				if($width > $height){
					if( $ratio > 1) {
						$newwidth = 180;
						$newheight = 180/$ratio;
					}else{
						$newwidth = 180;
						$newheight = 180*$ratio;
					}
				}else{
					$newwidth = 180;
					$newheight = 180/$ratio;
				}

				$thumb = imagecreatetruecolor($newwidth, $newheight);
				if($la == 2){
					$source = imagecreatefrompng($filename);
				}else{
					$source = imagecreatefromjpeg($filename);
				}
				imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


				$newName = explode(".", $img_link);
				$newNam = $newName[0]."_thumb.".$newName[1];
				if($la == 2){
					imagepng($thumb, $newNam);
				}else{
					imagejpeg($thumb, $newNam, 100);
				}
				imagedestroy($thumb);
				$smallimages .= $newNam."&";
			}
		}
		$smallimages = rtrim($smallimages, "&");
		$data["smallimages"] = $smallimages;
		$result = $this->db->insert('products', $data);		
        return $result;
	}
	
	
	public function updateProduct( $data )
	{	
		$smallimages = "";
		$data["bigimages"] = str_replace("bigimg=", "", $data["bigimages"]);
		$bigimgs = explode("&",$data["bigimages"]);
		
		foreach( $bigimgs as $k=>$v )
		{
			if(isset($v)){
				$mainImg = $v;
				$mainposter = $mainImg;

				$forEdit = $mainImg;
				$la = 1;
				$ex = explode(".", $forEdit);
				$ext = $ex[1];
				if($ext == "png" || $ext == "PNG"){
					$la = 2;
				}
							
				$img_link = "images/resource/".$forEdit;
			
				
				$filename = $img_link;
			
				list($width, $height) = getimagesize($filename);

				$ratio = $width/$height;
				if($width > $height){
					if( $ratio > 1) {
						$newwidth = 180;
						$newheight = 180/$ratio;
					}else{
						$newwidth = 180;
						$newheight = 180*$ratio;
					}
				}else{
					$newwidth = 180;
					$newheight = 180/$ratio;
				}

				$thumb = imagecreatetruecolor($newwidth, $newheight);
				if($la == 2){
					$source = imagecreatefrompng($filename);
				}else{
					$source = imagecreatefromjpeg($filename);
				}
				imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


				$newName = explode(".", $img_link);
				$newNam = $newName[0]."_thumb.".$newName[1];
				if($la == 2){
					imagepng($thumb, $newNam);
				}else{
					imagejpeg($thumb, $newNam, 100);
				}
				imagedestroy($thumb);
				$smallimages .= $newNam."&";
			}
		}
		$smallimages = rtrim($smallimages, "&");
		$data["smallimages"] = $smallimages;
		
		$this->db->where('id', $data['id']);
		$result = $this->db->update('products', $data);	
        return $result;
	}
	
	
	public function deleteProduct( $id )
	{		
		$this->db->where('id', $id);
		$result = $this->db->delete('products');
		return $result;	
	}
	
	public function getServices()
	{
		$query = $this->db->query('select id, titlege, titleen from services order by id desc');
        return $query->result();			 
	}
	
	public function getService( $id )
	{	
		$query = $this->db->get_where('services', array('id' => $id));
        return $query->result_array();			 
	}
	
	public function updateService( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('services', $data);	
        return $result;
	}
	
	public function deleteService( $id )
	{		
		$this->db->where('id', $id);
		$result = $this->db->delete('services');
		return $result;	
	}
	
	public function getServiceCategory()
	{	
		$result = $this->db->get('servicecategory');		
        return $result->result();		 
	}
	
	public function saveServiceCategory( $data )
	{	
		$str = md5(uniqid(rand(), true));
		$data["classname"] = "cls".$str;
		$result = $this->db->insert('servicecategory', $data);
        return $result;
	}
	
	public function getSingeServiceCategory( $id )
	{
		$query = $this->db->get_where('servicecategory', array('id' => $id));
        return $query->result_array();	
	}
	
	public function getSingeMainCategory( $id )
	{
		$query = $this->db->get_where('category', array('id' => $id));
        return $query->result_array();	
	}
	
	public function getSingeSubCategory( $id )
	{
		$query = $this->db->get_where('category', array('id' => $id));
        return $query->result_array();	
	}
	
	public function updateServiceCategory( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('servicecategory', $data);	
        return $result;
	}
	
	public function updateMainCategory( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('category', $data);	
        return $result;
	}
	
	public function updateSubCategory( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('category', $data);	
        return $result;
	}
	
	public function deleteServiceCategory( $id )
	{		
		
		$this->db->where('categoryId', $id);
		$result1 = $this->db->delete('services');
				
		$this->db->where('id', $id);
		$result = $this->db->delete('servicecategory');
		return $result;	
	}
	
	public function deleteMainCategory( $id )
	{	
		
		$this->db->select('id');
		$cat = $this->db->get_where('category', array('parent' => $id));
		$cat = $cat->result_array();
		
		foreach($cat[0] as $k=>$v)
		{
			$this->db->where('categoryId', $v);
			$this->db->delete('products');
			
			$this->db->where('id', $v);
			$this->db->delete('category');
		}
		
		$this->db->where('categoryId', $id);
		$result1 = $this->db->delete('products');
				
		$this->db->where('id', $id);
		$result = $this->db->delete('category');
		return $result;	
	}
		
	public function deleteSubCategory( $id )
	{			
		$this->db->where('categoryId', $id);
		$result1 = $this->db->delete('products');
				
		$this->db->where('id', $id);
		$result = $this->db->delete('category');
		return $result;	
	}
	
	public function insertService( $data )
	{	
		$result = $this->db->insert('services', $data);
        return $result;
	}
	
	
	
	public function getAbout()
	{	
		$result = $this->db->get('about');		
        return $result->result();
	}
	
	public function updateAbout( $data )
	{	
		$this->db->where('id', $data['id']);
		$result = $this->db->update('about', $data);
		return $result;
	}
	
	public function getContact()
	{	
		$result = $this->db->get('contact');		
        return $result->result_array();
	}
	
	public function updateContact( $data )
	{	
		$data["map"] = urldecode($data["map"]);
		$this->db->where('id', $data['id']);
		$result = $this->db->update('contact', $data);
		return $result;
	}
	
}