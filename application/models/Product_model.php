<?php
class Product_model extends CI_Model
{
	
    public function __construct() {
        parent::__construct();
    }
    public function getProducts( $page )
    {    
        //$size = $this->config->item("pageSize");
        //$start = ($page-1)*$size ;
        $query = $this->db->query("select id, titlege, titleen, coverimage, price from products order by id desc");
        return $query->result_array();             
    }
	
	public function getProductCount($id)
    {    
		if($id == 2)
		{
			$this->db->where('changedprice !=', 0);
			$this->db->from('products');
			$count = $this->db->count_all_results();			
		}
		else
		{
			$count = $this->db->count_all_results('products');
		}        
		return $count;		
    }
	
	public function getProductImage( $id )
    {    
		$this->db->select('coverimage');
		$query = $this->db->get_where('products', array('id' => $id));
	    return $query->result_array();
    }
	/*public function getProducts()
	{	
		$query = $this->db->query('select id, titlege, titleen, coverimage, price from products order by id desc');
        return $query->result();			 
	}
	*/
	public function getDetailProduct( $id )
	{	
		$this->db->set('seen', 'seen+1', FALSE);
		$this->db->where('id', $id);
		$this->db->update('products');
				
		$query = $this->db->get_where('products', array('id' => $id));
		return $query->result();	
	}
	
	public function getCategory( $id )
	{
		$category = [];
		$this->db->select('categoryId');
		$cat = $this->db->get_where('products', array('id' => $id));
		$cat = $cat->result_array();
		
		$mquery = $this->db->get_where('category', array('id' => $cat[0]["categoryId"]));
        $mcat = $mquery->result_array();
		$category["main"] = $mcat[0];
		
		if( $mcat[0]["parent"] != 0 )
		{
			$query2 = $this->db->get_where('category', array('id' => $mcat[0]["parent"]));
			$mcat2 = $query2->result_array();
			$category["sub"] = $mcat2[0];
		}
		return $category;
	}
	
	public function getCategories()
	{
		//$query = $this->db->get('category');
		//return $query->result_array();	
		$menus = $this->db->get_where('category', array('parent'=>0))->result();
		$data = [];
		foreach($menus as $menu)
		{
			 $submenu = $this->db->get_where('category',array('parent'=>$menu->id));
			 if($submenu->num_rows()>0)
				 $menu->submenu = $submenu->result();
			 else
				 $menu->submenu = [];

			$data[] = $menu;
		}
		$menudata['menus'] =$data;
		return $menudata['menus'];
		//print_r($menudata['menus']); die;
		//$this->load->view(index,$menudata);

	}
	
	public function getRelatedProducts( $id )
	{
		$this->db->select('categoryId');
		$cat = $this->db->get_where('products', array('id' => $id));
		$cat = $cat->result_array();
		
		$category = $cat[0]["categoryId"];
		$mquery = $this->db->get_where('category', array('id' => $category));
        $mcat = $mquery->result_array();
		
		if( $mcat[0]["parent"] != 0 )
		{
			$query2 = $this->db->get_where('category', array('id' => $mcat[0]["parent"]));
			$mcat2 = $query2->result_array();
			$category = $mcat2[0]["id"];
		}
		
		$query = $this->db->query("select id, titlege, titleen, coverimage, price from products 
		where categoryId=$category and id!=$id order by id desc limit 5");
		return $query->result_array();	
		
		//return $category;
	}
		
	public function filtercount( $data )
	{
		$start = $data['page'];
		$min = $data['min-price'];
		$max = $data['max-price'];
		$cat = 0;
		if( isset($data['category']) )
		{
			$cat = $this->getCategory( $data['category'] );	
			$catmain = $cat['main']['id'];
			if( isset($cat['sub']['id']) )
			{
				$catsub = $cat['sub']['id'];
			}
		}
		$filter = "";
		if($data["filtername"] == "menu_order")
		{
			$filter = "id desc";
		}
		if($data["filtername"] == "popularity")
		{
			$filter = "seen asc";
		}
		if($data["filtername"] == "date")
		{
			$filter = "dt desc";
		}
		if($data["filtername"] == "price")
		{
			$filter = "price asc";
		}
		if($data["filtername"] == "price-desc")
		{
			$filter = "price desc";
		}
		if( $cat > 0 )
		{
			if( isset($catsub) )
			{
				$query = $this->db->query("select count(*) as count from products where price>=$min and price<=$max and (categoryId=$catmain or categoryId=$catsub) order by $filter");
			}
			else
			{
				$query = $this->db->query("select count(*) as count from products where price>=$min and price<=$max and categoryId=$catmain order by $filter");
			}
				
		}
		else
		{
			$query = $this->db->query("select count(*) as count from products where price>=$min and price<=$max order by $filter");	
		}
		
		
		$count = $query->result_array();
		return $count[0]['count'];
	}
	public function getFilter( $data, $perpage, $id )
	{
		$start = $data['page'];
		$filter = "";
		$cat = 0;
		
		$min = $data['min-price'];
		$max = $data['max-price'];
		if( isset($data['category']) )
		{
			$cat = $this->getCategory( $data['category'] );
			$catmain = $cat['main']['id'];
			if( isset($cat['sub']['id']) )
			{
				$catsub = $cat['sub']['id'];
			}
		}
		
		if($data["filtername"] == "menu_order")
		{
			$filter = "id desc";
		}
		if($data["filtername"] == "popularity")
		{
			$filter = "seen asc";
		}
		if($data["filtername"] == "date")
		{
			$filter = "dt desc";
		}
		if($data["filtername"] == "price")
		{
			$filter = "price asc";
		}
		if($data["filtername"] == "price-desc")
		{
			$filter = "price desc";
		}
		
		$sale = "";
		if($id = 2)
		{
			$sale = "changedprice !=0 and ";
		}
		else
		{
			$sale = "";
		}
				
		if( $cat > 0 )
		{
			if( isset($catsub) )
			{	
				$query = $this->db->query("select id, titlege, titleen, coverimage, price from products where price>=$min and ".$sale." price<=$max and (categoryId=$catmain or categoryId=$catsub) order by $filter  LIMIT $start, $perpage");
			}
			else
			{
				
				$query = $this->db->query("select id, titlege, titleen, coverimage, price from products where price>=$min and ".$sale." price<=$max and categoryId=$catmain order by $filter LIMIT $start, $perpage");
			}
		}
		else
		{
			$query = $this->db->query("select id, titlege, titleen, coverimage, price from products where price>=$min and ".$sale." price<=$max order by $filter  LIMIT $start, $perpage");	
		}
		
		$res = $query->result_array();
		//print_r($res); die;
        $id = [];
		
        $title = [];
		$image = [];
        $price = [];
				
		foreach ($query->result_array() as $result){
			$id[] = $result['id']; 
			if( $this->lang->lang() == 'ge' )
			{
				$title[] = $result['titlege'];
			}
			else
			{
				$title[] = $result['titleen'];
			}
			$image[] = $result['coverimage']; 
			$price[] = $result['price']; 
		}
		
		return array($id, $title, $image, $price);
	}
	
	/*
	public function getFilter( $data )
	{
		$filter = "";
		if($data["filtername"] == "menu_order")
		{
			$filter = "id desc";
		}
		if($data["filtername"] == "popularity")
		{
			$filter = "seen asc";
		}
		if($data["filtername"] == "date")
		{
			$filter = "dt desc";
		}
		if($data["filtername"] == "price")
		{
			$filter = "price asc";
		}
		if($data["filtername"] == "price-desc")
		{
			$filter = "price desc";
		}
		
		$query = $this->db->query("select id, titlege, titleen, coverimage, price from products order by $filter limit 3");	
        return $query->result_array();  
	}
	*/
	public function getProductsByPriceRange( $data )
	{
		$from = substr($data["from"], 1);
		$to = substr($data["to"], 1);
		$query = $this->db->query("select id, titlege, titleen, coverimage, price from products where price>=$from and price<=$to order by id desc limit 3");	
        return $query->result_array();  
	}
	
	public function getCategoryFilter( $data )
	{
		$cat_id = $data["cat"];
		$this->db->select('parent');
		$parent = $this->db->get_where('category', array('id' => $cat_id));
        $parent = $parent->result_array();	

		if( $parent[0]["parent"] != 0)
		{
			$this->db->select('id');
			$child = $this->db->get_where('category', array('id' => $parent[0]["parent"]));
			$child = $child->result_array();	
			$cat_id = $child[0]["id"];
		}	
		$query = $this->db->query("select id, titlege, titleen, coverimage, price from products where categoryId=$cat_id order by id desc limit 3");	
        return $query->result_array();  
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
	
	public function getBestServices()
	{	
		$query = $this->db->query('SELECT id, titlege, titleen, coverimage FROM `services` order by id desc limit 3');
        return $query->result_array();			 
	}
	
	public function getProductsForSent()
	{	
		$query = $this->db->query('SELECT id, titlege, titleen from products where sent=0 limit 5');
		return $query->result_array();	
         
	}
	
	public function updateSentProducts( $data )
	{
        foreach($data as $k=>$v)
		{
			$this->db->set('sent', '1');
			$this->db->where('id', $v["id"]);
			$this->db->update('products');
		};			 
	}
	
	public function getEmails()
	{
		$this->db->select('*');
		$query = $this->db->get('subscribers');
		return $query->result_array();	
	}
	
	public function getProductForFooter()
	{
		$this->db->select('id, titlege, titleen');
		$this->db->order_by('id', 'DESC');
		$this->db->limit(25);
		$query = $this->db->get('products');
		return $query->result_array();	
	}
}