<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {

	public function getResponse()
	{
        $fileName = 'post_'.date('Y_m_d_H_i_s').'.txt';
        file_put_contents($fileName, json_encode($_POST));
		echo 'OK';
	}
}
