<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penyakit extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

	function tampil_data(){
           $this->db->select('*');
        $this->db->from('hp');
        $this->db->where('jenis','penyakit');
        return $this->db->get();
    }

     

   
}
