<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {


	public function index()
	{		
		$this->load->model('home_model');
		$this->data['productsmain'] = $this->home_model->getProducts();
		$this->data['lastproducts'] = $this->home_model->getLastProducts();
		$this->data['popularproducts'] = $this->home_model->getPopularProducts();
		$this->data['saledproducts'] = $this->home_model->getSaleProducts();
		$this->data['services'] = $this->home_model->getServices();	
		$this->data['servicecats'] = $this->home_model->getServiceCategories();	
		$this->data["main"] = $this->home_model->getMain();
		$this->data["lastservice"] = $this->home_model->getLastService();
		$this->data["carbrands"] = $this->home_model->getBrands();
		$this->data["widgets"] = $this->home_model->getWidgets();
		$this->data["servmain"] = $this->home_model->getServTexts();
		$this->data["prmain"] = $this->home_model->getPrText();
		$this->data["icons"] = $this->home_model->getIcons();		
				
		$this->load->view('common/header',$this->data);
		$this->load->view('home/home',$this->data);
		$this->load->view('common/footer',$this->data);
	}
	
	public function subscribe()
	{
		$this->load->model('home_model');
		$result = $this->home_model->subscribe( $_POST );
		
		if( $result ){
			echo 'Updated';
		}
		else 
			echo 'Failed';
	}
	
	public function getModels()
	{		
		$this->load->model('home_model');
		$result = $this->home_model->getModels( $_POST );
		if( $result ){
			if(!empty($result))
			{
				$str = '<option value="0">აირჩიეთ მოდელი</option>';
				foreach($result as $n=>$p)
				{ 
					$str.='<option value="'.$p["model"].'">'.$p["model"].'</option>';
				}
				echo $str;
			}
			else
			{
				echo 'error';
			}
		}
		else 
			echo 'error';
	}
	
	public function sendEmail()
	{
		$username = $_POST["username"];
		$useremail = $_POST["useremail"];
		$subject = "წერილი საიტიდან";
		$body = "ტელეფონი: ".$_POST["phone"]."<br>"."სერვისის კატეგორია: ".$_POST["servicecat"]."<br>"."ბრენდი: ".$_POST["brand"]."<br>";
		if(isset($_POST["model"]) || empty($_POST["model"]) )
		{
			$body.="მოდელი: ".$_POST["model"]."<br>";
		}
		$body.="ტექსტი: ".$_POST["text"];
		
			$config = Array('mailtype' => 'html');
			$this->load->library('email', $config);
			
			$this->load->library('email');
	  	    $this->email->from("noreply@itda.ge", $username);
	  	    $this->email->cc($useremail); 
	  	    $this->email->to("nana.jjanashia@gmail.com"); 
	  	    $this->email->subject($subject);
	  	    $this->email->message($body);
	  	    $this->email->send();

			if ( ! $this->email->send())
			{
			    $mesaage = "Message wasn't send";
			    $success = false;
			}
			
			$success = true;
			$message =  "Message sent successfully";

		echo $success;
		
	}
	
}
