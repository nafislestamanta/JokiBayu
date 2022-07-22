<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	 function __construct(){
        parent::__construct();      
        $this->load->model('M_register');
        $this->load->helper('url');
       
}

	public function index()
	{
		$dariDB = $this->M_register->kode();
    $data = array('id_user' => $dariDB);
       //print_r($data);
	    $this->load->view('user/register',$data);
	}

	  public function daftar(){
              $id_user = $this->input->post('id_user');           
              $nama = $this->input->post('nama');
              $username = $this->input->post('username');
              $password = md5($this->input->post('password'));
              $no_hp = $this->input->post('no_hp');
              $alamat = $this->input->post('alamat');
              $level = $this->input->post('level');
     
               $data = array(
              'id_user' => $id_user, 	
              'nama' => $nama,
              'username' => $username,
              'password' => $password,
              'no_hp' => $no_hp,
              'alamat' => $alamat,              
              'level' => $level,
        );
               $this->M_register->input_data($data,'user');
               if ($data) {
        $this->session->set_flashdata('alert', '<div class="alert alert-primary dark alert-dismissible fade show" role="alert">
          <p><strong>Data Akun Anda Telah Disimpan</strong></p>
              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>');
      } else {
        $this->session->set_flashdata('alert', '<div class="alert alert-primary dark alert-dismissible fade show" role="alert">
          <p><strong>Data belum tersimpan</strong></p>
              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>');
      }
        redirect('user/login');
 	//print_r($id_user);
            
    }

}
