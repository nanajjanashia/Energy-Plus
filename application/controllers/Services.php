<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {
	

	public function index()
	{
		$this->load->model('service_model');
		$this->data["servicecategory"] = $this->service_model->getServiceCategory();
		$this->data["services"] = $this->service_model->getServices();
		
		$this->load->view('common/header',$this->data);
		$this->load->view('pages/services',$this->data);
		$this->load->view('common/footer',$this->data);
	}

	public function detail( $id=null )
	{
		$this->load->model('service_model');
		$this->data["service"] = $this->service_model->getService( $id );
		
		$this->load->view('common/header',$this->data);
		$this->load->view('pages/servicedetail',$this->data);
		$this->load->view('common/footer',$this->data);
	}


}
