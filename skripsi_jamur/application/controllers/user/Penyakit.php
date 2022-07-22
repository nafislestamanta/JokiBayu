<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	
	public function index()
	{
	$this->load->model('M_penyakit');
        $data["hp"] = $this->M_penyakit->tampil_data()->result_array();
		$this->load->view('user/penyakit',$data);
	}
}
