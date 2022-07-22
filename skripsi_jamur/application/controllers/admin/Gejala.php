<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_gejala');
        $this->load->helper('url');

        if($this->session->userdata('level') == "" | $this->session->userdata('level') == "user"){
            $this->session->set_flashdata('pesan', '<p class="text-center alert alert-warning" role="alert">Anda Harus Login Sebagai Admin !</p>');
            redirect('Auth');
          }
       
}

	public function index()
	{
 
       $dariDB = $this->M_gejala->kode();
        $data = array('id_gejala' => $dariDB);

        $data["gejala"] = $this->M_gejala->tampil_data()->result_array();
        $this->load->view('admin/gejala',$data);
        
	}
    public function tambah_aksi(){
              $id_gejala = $this->input->post('id_gejala');
              $gejala = $this->input->post('gejala');
     
               $data = array(
              'id_gejala' => $id_gejala,
              'gejala' => $gejala,
        );
               $this->M_gejala->input_data($data,'gejala');
        redirect('admin/gejala');
 
            
    }

     function edit(){
    
        $id_gejala = $this->input->post('id_gejala');
        $gejala = $this->input->post('gejala');

        $data = array('id_gejala' => $id_gejala, 'gejala' => $gejala,);
        $this->M_gejala->edit_data($id_gejala, $data);
            redirect('admin/gejala');
         //print_r($data);

    }



function hapus($id_gejala){
    $where = array('id_gejala' => $id_gejala);
    $this->M_gejala->hapus_data($where,'gejala');
    redirect('admin/gejala');
   }

   
}
