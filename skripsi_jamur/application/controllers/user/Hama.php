<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hama extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_hama');
        $data["hp"] = $this->M_hama->tampil_data()->result_array();
		$this->load->view('user/hama',$data);
	}
}
