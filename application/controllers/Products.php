<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

	public function index( $id=null )
    {    
		$lang = $this->lang->lang();
        $this->load->model('product_model');
		$this->data["count"] = $count = $this->product_model->getProductCount($id);
		$this->data["menus"] = $this->product_model->getCategories();
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().$lang.'/products/index';
		
		$config['total_rows'] = $count;
		$config['per_page'] = 3;
		$config['num_links'] = 5;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		
		$config['next_link'] = '→';
		$config['prev_link'] = '←';
		$this->pagination->initialize($config);
		$this->db->order_by("id", "desc");
		
		$query = $this->db->get("products",$config['per_page'],$this->uri->segment(3));
		
		$this->data["products"] = $query->result_array();
		$this->data["count"] = $count;
		$this->data["page"] = 1;
		$this->data["size"] = $config['per_page'];
        $this->load->view('common/header',$this->data);
        $this->load->view('pages/products',$this->data);
        $this->load->view('common/footer',$this->data);
    }

	public function detail( $id = null )
	{		
		if (!ctype_digit($id)) {
			echo "Invalid Argument Supplied";
		}	
		$this->load->model('product_model');
		$this->data["product"] = $this->product_model->getDetailProduct( $id );
		$this->data["category"] = $this->product_model->getCategory( $id );
		$this->data["related"] = $this->product_model->getRelatedProducts( $id );
		$this->data["bestservices"] = $this->product_model->getBestServices();
		
		$this->load->view('common/header',$this->data);
		$this->load->view('pages/product-detail',$this->data);
		$this->load->view('common/footer',$this->data);
	}
	
	public function filter($id=null)
    {  
		
		$count = 0;
		$data = [];
		$this->load->model('product_model');
		
		$lang = $this->lang->lang();
        $this->load->model('product_model');
		$this->data["count"] = $count = $this->product_model->getProductCount($id);
		$this->data["menus"] = $this->product_model->getCategories();
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().$lang.'/products/index';		
		
		$config['per_page'] = 3;	
		$config['num_links'] = 5;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
	
		$config['next_link'] = '→';
		$config['prev_link'] = '←';
				
		$size = $config['per_page'];
		$page = $_POST['page'];
        $_POST['page'] = ($_POST['page']-1)*$size ;
			$config['curt_page'] = $_POST['page'];
		if( $_POST["filtername"] ){
			$count = $this->product_model->filtercount($_POST);
			$products = $this->product_model->getFilter( $_POST, $config['per_page'], $id );
		}
		$config['total_rows'] = $count;
		$this->pagination->initialize($config);
		$links = $this->pagination->create_links();

		die(json_encode(array(
			"code" => 1,
			"products" => $products,
			"links" => $links,
			"page" => $page,
			"size" => $size,
			"total_rows" => $count
		)));
    }
	
	
	public function priceRange()
	{		
		$this->load->model('product_model');
		$this->data["pricerange"] = $this->product_model->getProductsByPriceRange( $_POST );
		echo json_encode($this->data["pricerange"]);
	}
	
	public function categoryFilter()
	{		
		$this->load->model('product_model');
		$this->data["pricerange"] = $this->product_model->getCategoryFilter( $_POST );
		echo json_encode($this->data["pricerange"]);
	}

	public function saveProductInChart()
	{	
			$this->load->model('product_model');
			$image = $this->product_model->getProductImage( $_POST["id"] );
			$_POST['products'][$_POST["id"]]["image"] = $image[0]["coverimage"];
			
			$_SESSION['products'] =$_POST['products'];
			$_SESSION['cart'] = $_POST['cart'];
			
			$_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (7 * 30 * 60);

	}
	
	public function updateCart()
	{
		$data = [];
		$ids = str_replace("productid=","",$_POST["ids"]);
		$quantity = str_replace("cart-quantity=","",$_POST["quantity"]);
		$price = str_replace("price=","",$_POST["price"]);
		$ids = explode("&",$ids);
		$quantity = explode("&",$quantity);
		$price = explode("&",$price);
		$sum = 0;
		for( $i=0; $i<count($quantity); $i++ )
		{
			$sum += $quantity[$i];
		}
		$_SESSION['cart'] = $sum;
		$totalprice = 0;
		if(isset($_SESSION['products']))
		{
			foreach($ids as $k=>$v)
			{
				
				$_SESSION['products'][$v]["amount"] = $quantity[$k];
				$totalprice += $quantity[$k] * $price[$k];
			}
		}
		echo '{"sum":"'.$sum.'","total":"'.$totalprice.'"}';
		
	}
	
	public function removeProductFromChart()
	{ 
		$_SESSION['cart'] = (int)$_SESSION['cart'] - (int)$_POST["quantity"];
		unset($_SESSION['products'][$_POST["id"]]);
		
	}
	
	public function cart()
	{
		$this->load->view('common/header',$this->data);
		$this->load->view('pages/cart',$this->data);
		$this->load->view('common/footer',$this->data);
	}
	
	public function cron_sendEmails()
	{
		
		$lang = $this->lang->lang(); 
		$this->load->model('product_model');
		$products = $this->product_model->getProductsForSent();
		$links = "დაათვალიერეთ ახალი დამატებული პროდუქტები <a href='".base_url()."".$lang."'>ჩვენს საიტზე</a>.<br><br>";
		//print_r($products); die;
		if( !empty($products) )
		{
			foreach($products as $k=>$v)
			{
				$links .= "<a href='".base_url()."".$lang."/products/detail/".$v["id"]."'>".$v["title$lang"]."</a><br>";
			}
			$this->product_model->updateSentProducts($products);
			
			$username = "nana.jjanashia@gmail.com";
			$useremail = "nana.jjanashia@gmail.com"; 
			$subject = 'ახალი პროდუქტები ჩვენს საიტზე';
			$body = $links;
		
			$config = Array('mailtype' => 'html');
			$this->load->library('email', $config);
			
			$users = $this->product_model->getEmails();
			foreach($users as $p=>$q)
			{			
				$this->email->from("noreply@itda.ge", $username);
				$this->email->cc($useremail); 
				$this->email->to($q["email"]); 
				$this->email->subject($subject);
				$this->email->message($body);
				$this->email->send();			
			}
			if ( !$this->email->send() )
			{
			    $mesaage = "Message wasn't send";
			    $success = false;
			}
			
			$success = true;
			$message =  "Message sent successfully";
		}
		else
		{
			$success = false;
			$message =  "Message not sent";
		}
	}
}
