<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasil extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

	function tampil_data(){
		$this->db->select('hasil.*, hp.*, user.*');
        $this->db->from('hasil');
        $this->db->join('hp', 'hp.id_hp = hasil.id_hp','left');
        $this->db->join('user', 'user.id_user = hasil.id_user','left');
        $query = $this->db->get();
        return $query;
	}

    function hapus_data(){
       $this->db->empty_table('hasil');
    }

}