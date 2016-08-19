<?php

class Contact extends MY_Controller {
	
	public function index()
	{
		$this->load->model('contact_model');
		$this->data["contact"] = $this->contact_model->getContact();
		
		$this->load->view('common/header',$this->data);
		$this->load->view('pages/contact',$this->data);
		$this->load->view('common/footer',$this->data);
	}

	public function sentemail()
	{
		$username = $_POST["useremail"];
		$useremail = $_POST["useremail"];
		$subject = "წერილი საიტიდან";
		$body = "ტელეფონი".$_POST["phone"]."<br>".$_POST["text"];
		
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
