<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_diagnosa extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

function tampil_data(){
		return $this->db->get('gejala');
	}

            function input_data($data,$table){
                $this->kode    = $_POST['id_gejala'];   
        $this->db->insert($table,$data);
                return $this->db->get('gejala');

    }
    
  
    function pilihan()
    {
        $name_semua       = $this->input->post('gejala[]');
        $data['id_gejala']      = $name_semua;
         $this->db->select('gejala.*, pengetahuan.*');
$this->db->from('gejala');
$this->db->join('pengetahuan','pengetahuan.id_gejala = gejala.id_gejala');
// $this->db->join('pencegahan','pencegahan.id_gejala = gejala.id_gejala');
            $this->db->where('gejala.id_gejala', $data);
            $query = $this->db->get();
            return $query->result();


}
}