<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller {
	

	public function index()
	{
		$this->load->view('common/header',$this->data);
		$this->load->view('pages/checkout',$this->data);
		$this->load->view('common/footer',$this->data);
	}


}
