<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends MY_Controller {
	

	public function index()
	{
		$this->load->view('common/header',$this->data);
		$this->load->view('pages/cart',$this->data);
		$this->load->view('common/footer',$this->data);
	}


}
