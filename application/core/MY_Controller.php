<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public $data = array();

	public function __construct(){
		
		parent::__construct();
	
		$this->data['language'] = $language = $this->lang->lang();
		if(!$language){
			redirect(base_url("ge"));
		}
			
		$this->data['controller'] = $controller = $this->uri->segment(2);
		$this->data['view'] = $function = $this->uri->segment(3);
		$this->data['slug'] = $slug = $this->uri->segment(4);
	
		
		$this->data["title"] = "MYLOMBARD";
		$this->data["keywords"] = "MYLOMBARD";
		$this->data["description"] = "MYLOMBARD";
		
		$this->load->model('service_model');
		$this->load->model('product_model');
		$this->load->model('contact_model');
		$this->load->model('home_model');
		$this->data["service"] = $this->service_model->getServiceForFooter();
		$this->data["products"] = $this->product_model->getProductForFooter();
		$this->data["contact"] = $this->contact_model->getContact();
		$this->data["logoes"] = $this->home_model->getLogoes();
		$this->data["worktime"] = $this->home_model->getWorkTime();		
		$this->data["socicons"] = $this->home_model->getSocIcons();
		
	}			
	
}
