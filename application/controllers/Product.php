<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index() {
		$_SESSION['account_name'] = 'kacksonchua699@gmail.com';
		$this->data['member'] = $this->member_model->getMember($_SESSION['account_name']);
		$this->load->view('product', $this->data);
	}

	public function createTransaction() {
		$created_at = date('Y-m-d H:i:s');
		$transaction_id = $this->transaction_model->createNew($this->input->post(), $created_at);
		echo json_encode(array(
			'chk' => md5($transaction_id.'kCX38Jkd6Jjwepo'.$this->input->post('amount')),
			'referenceID' => $transaction_id,
			'transactionTime' => date('YmdHis', strtotime($created_at))
		));
	}
}
