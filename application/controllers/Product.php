<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$_SESSION['account_name'] = 'kacksonchua699@gmail.com';
		$this->data['member'] = $this->member_model->getMember($_SESSION['account_name']);
		$this->load->view('product', $this->data);
	}

	public function createTransaction(){

		$transaction_id = $this->transaction_model->createNew($this->input->post());
		$this->load->view('product', $transaction_id);

	}
}
