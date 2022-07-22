<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Detail');
        $this->load->helper('url');
	}

	
	public function index()
	{
		$this->load->model('M_Detail');
      $data["hp"] = $this->M_Detail->tampil_data()->result_array();
  		$this->load->view('user/detail',$data);
	}

	
	public function details($id_hp=''){
	    if($id_hp)
	    {
	            $this->load->database();                    
	            $data['hp'] = $this->M_Detail->detail($id_hp);
	             $this->load->view('user/detail', $data);    
	    }
	    else
	    {
	            redirect('');
	    }
	}
}
