<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hamapenyakit extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_hamapenyakit');
        $this->load->helper('url');

        if($this->session->userdata('level') == "" | $this->session->userdata('level') == "user"){
          $this->session->set_flashdata('pesan', '<p class="text-center alert alert-warning" role="alert">Anda Harus Login Sebagai Admin !</p>');
          redirect('Auth');
        }
       
}

	public function index()
	{
        $dariDB = $this->M_hamapenyakit->kode();
        $data = array('id_hp' => $dariDB);

        $data["hp"] = $this->M_hamapenyakit->tampil_data()->result_array();
        $this->load->view('admin/hamapenyakit',$data);
        
	}

		public function tambah_aksi(){
 	 		 $config['upload_path']         = './gambar/';  // folder upload 
             $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
              $config['max_size']             = 20000;
              $config['file_name']			= $this->input->post('id_hp');
              $config['overwrite']   			= true;
              //$config['max_width']            = 1024;
              //$config['max_height']           = 768;
 
              $this->load->library('upload', $config);
 
              if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
              {
                     echo 'anda gagal upload';
              }
              else
              {    
             	//tampung data dari form
            	$id_hp = $this->input->post('id_hp');
            	$nama_hp = $this->input->post('nama_hp');
                $jenis = $this->input->post('jenis');
            	 $file = $this->upload->data();
            	  $gambar = $file['file_name'];
            	$keterangan = $this->input->post('keterangan');
          
               $data = array(
			        'id_hp' => $id_hp,
			        'nama_hp' => $nama_hp,
              'jenis' => $jenis,
			         'gambar' => $gambar,
			        'keterangan' => $keterangan,
			    );
               $this->M_hamapenyakit->input_data($data,'hp');
				redirect('admin/hamapenyakit');
 
            
		}

    
}

  function edit(){
     $id_hp = $this->input->post('id_hp');
        $nama_hp = $this->input->post('nama_hp');
        $jenis = $this->input->post('jenis');
        
         $keterangan= $this->input->post('keterangan');

       $config['upload_path']         = './gambar/';  // folder upload 
              $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
              $config['max_size']             = 20000;
              $config['file_name']      = $this->input->post('id_hp');
              $config['overwrite']        = true;
              
              $this->load->library('upload', $config);
 
              if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
              {
                     if (!empty($_FILES['AvatarImage']['name'])) {
          // Name isn't empty so a file must have been selected
          $message = str_replace("<p>", "",$this->upload->display_errors());
          $message = str_replace("</p>", "",$message);
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<script>window.history.back();</script>";
              }
              else
              {   
       
    
        // No file selected - set default image
        $gambar = $this->input->post('gambar_old');
          $data       = array(
            'id_hp' => $id_hp,
              'nama_hp' => $nama_hp,
              'jenis' => $jenis,
               'gambar' => $gambar,
              'keterangan' => $keterangan,            
          );
        $this->M_hamapenyakit->edit_data($id_hp, $data);
            redirect('admin/hamapenyakit');
      //  print_r($gambar);

        }
      }else{
        $file       = $this->upload->data();
        $gambar  = $file['file_name'];
        $data       = array(
          'id_hp' => $id_hp,
              'nama_hp' => $nama_hp,
              'jenis' => $jenis,
               'gambar' => $gambar,
              'keterangan' => $keterangan,
        );
       $this->M_hamapenyakit->edit_data($id_hp, $data);
            redirect('admin/hamapenyakit');
         //print_r($data);

      
  }
}

 function hapus($id_hp){
    $where = array('id_hp' => $id_hp);
    $this->M_hamapenyakit->hapus_data($where,'hp');
    redirect('admin/hamapenyakit');
   }


   
}
