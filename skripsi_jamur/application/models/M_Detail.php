<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Detail extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

	function tampil_data(){
           $this->db->select('*');
        $this->db->from('hp');
        $this->db->where('jenis','hama');
        return $this->db->get();
    }

     
 function detail($id_hp)
        {
             $this->db->select('hp.*');
 $this->db->from('hp');
 // $this->db->join('pengobatan','pengobatan.id_hp = hp.id_hp');
 // $this->db->join('pencegahan','pencegahan.id_hp = hp.id_hp');
               $this->db->where('hp.id_hp', $id_hp);
                $query = $this->db->get();
                return $query->result();
        }

   
}
