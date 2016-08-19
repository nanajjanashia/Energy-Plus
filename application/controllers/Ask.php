<?php

class Ask extends MY_Controller {
	

	public function index()
	{
		$this->load->model('ask_model');
		$this->data["category"] = $this->ask_model->getCategory();
		$this->data["ask"] = $this->ask_model->getAsk();
		
		$this->load->view('common/header',$this->data);
		$this->load->view('pages/ask',$this->data);
		$this->load->view('common/footer',$this->data);
	}

}
