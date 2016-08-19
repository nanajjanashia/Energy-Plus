<?php

class About extends MY_Controller {
	

	public function index()
	{
		$this->load->model('about_model');
		$this->data["about"] = $this->about_model->getAbout();
		
		$this->load->view('common/header',$this->data);
		$this->load->view('pages/about',$this->data);
		$this->load->view('common/footer',$this->data);
	}

}
