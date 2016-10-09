<?php
class Member_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
	}

    public function getMember($account_name)
	{
		$query = $this->db->get_where('member', array('account_name' => $account_name));
	    return $query->row_array();
	}
}
