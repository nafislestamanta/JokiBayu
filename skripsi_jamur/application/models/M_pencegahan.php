<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pencegahan extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

	function tampil_data(){
		$this->db->select('pencegahan.*, hp.nama_hp');
        $this->db->from('pencegahan');
        $this->db->join('hp', 'hp.id_hp = pencegahan.id_hp','left');
        $query = $this->db->get();
        return $query;
	}

            function input_data($data,$table){
                $this->kode    = $_POST['id_pencegahan'];   
        $this->db->insert($table,$data);
                return $this->db->get('pencegahan');

    }
    public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_pencegahan,2)) as id_pencegahan from pencegahan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->id_pencegahan)+1;
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

   function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

      function edit_data($where,$data){
        $this->db->where('id_pencegahan', $where);
        $this->db->update('pencegahan',$data);
    

}
}