<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengobatan extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

	function tampil_data(){
		 $this->db->select('pengobatan.*, hp.nama_hp');
        $this->db->from('pengobatan');
        $this->db->join('hp', 'hp.id_hp = pengobatan.id_hp','left');
        $query = $this->db->get();
        return $query;
	}

            function input_data($data,$table){
                $this->kode    = $_POST['id_pengobatan'];   
        $this->db->insert($table,$data);
                return $this->db->get('pengobatan');

    }
      public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_pengobatan,2)) as id_pengobatan from pengobatan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->id_pengobatan)+1;
                $kd = sprintf("%02s", $tmp);
            }
        }else{
            $kd = "01";
        }
        
        return "G".$kd;
    }

    function get(){
        return $this->db->get('hp');
    }

      function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
   

      function edit_data($where,$data){
        $this->db->where('id_pengobatan', $where);
        $this->db->update('pengobatan',$data);
    

  
}
}