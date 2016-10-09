<?php
class Transaction_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
	}

    public function createNew($tx_data)
	{
        $this->db->insert('transaction', array(
			'account_name' => $_SESSION['account_name'],
			'platform' => $tx_data['platform'],
			'tx_type' => $tx_data['transaction_type'],
			'exchange_rate' => $tx_data['ex_rate'],
			'amount' => $tx_data['amount'],
			'platform_email' => $tx_data['platform_email'],
            'bank' => $tx_data['bank'],
            'full_name' => $tx_data['name'],
            'ic' => $tx_data['ic'],
            'phone' => $tx_data['phone'],
            'email' => $tx_data['email'],
            'created_at' => date('Y-m-d H:i:s'),
            'approved_at' => null,
            'deleted_at' => null,
            'rejected_at' => null,

		));

        return $this->db->insert_id();


	}






}
