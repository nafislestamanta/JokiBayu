<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencegahan extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_pencegahan');
        $this->load->helper('url');

        if($this->session->userdata('level') == "" | $this->session->userdata('level') == "user"){
            $this->session->set_flashdata('pesan', '<p class="text-center alert alert-warning" role="alert">Anda Harus Login Sebagai Admin !</p>');
            redirect('Auth');
          }
       
}

	public function index()
	{
 
       $dariDB = $this->M_pencegahan->kode();
        $data = array('id_pencegahan' => $dariDB);
        $data["hp"] = $this->M_pencegahan->get()->result_array();
        $data["pencegahan"] = $this->M_pencegahan->tampil_data()->result_array();
        $this->load->view('admin/pencegahan',$data);
        
	}
    public function tambah_aksi(){
              $id_pencegahan = $this->input->post('id_pencegahan');
              $id_hp = $this->input->post('id_hp');
              $pencegahan = $this->input->post('pencegahan');
     
               $data = array(
              'id_pencegahan' => $id_pencegahan,
              'id_hp' => $id_hp,
              'pencegahan' => $pencegahan,
        );
               $this->M_pencegahan->input_data($data,'pencegahan');
        redirect('admin/pencegahan');
 
            
    }

     function edit(){
    
        $id_pencegahan = $this->input->post('id_pencegahan');
        $pencegahan = $this->input->post('pencegahan');

        $data = array('id_pencegahan' => $id_pencegahan, 'pencegahan' => $pencegahan,);
        $this->M_pencegahan->edit_data($id_pencegahan, $data);
            redirect('admin/pencegahan');
         //print_r($data);

    }

    



function hapus($id_pencegahan){
    $where = array('id_pencegahan' => $id_pencegahan);
    $this->M_pencegahan->hapus($where,'pencegahan');
    redirect('admin/pencegahan');
   }

   
}
