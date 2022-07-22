<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hamapenyakit extends CI_Model {


          public function __construct()
    {
        $this->load->database();
    }

	function tampil_data(){
		return $this->db->get('hp');
	}

 		function input_data($data,$table){
 				$this->kode    = $_POST['id_hp'];	
		$this->db->insert($table,$data);
		        return $this->db->get('hp');

	}
  public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_hp,2)) as id_hp from hp");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->id_hp)+1;
                $kd = sprintf("%02s", $tmp);
            }
        }else{
            $kd = "01";
        }
        
        return "G".$kd;
    }
function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
      
       function edit_data($where,$data){
        $this->db->where('id_hp', $where);
        $this->db->update('hp',$data);
    }

 function total_rows() {
    return $this->db->get('hp')->num_rows();
  }

  function total_row() {
    return $this->db->get('gejala')->num_rows();
  }

  function total() {
    return $this->db->get('pengobatan')->num_rows();
  }

  function total_r() {
    return $this->db->get('pencegahan')->num_rows();
  }

  function total_p() {
    return $this->db->get('pengetahuan')->num_rows();
  }

   function total_u() {
    return $this->db->get('user')->num_rows();
  }

  function total_a() {
    return $this->db->get('pengetahuan')->num_rows();
  }

  function total_h() {
    return $this->db->get('hasil')->num_rows();
  }
   
}