<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengetahuan extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

	function tampil_data(){
		$this->db->select('pengetahuan.*, hp.nama_hp, gejala.gejala');
        $this->db->from('pengetahuan');
        $this->db->join('hp', 'hp.id_hp = pengetahuan.id_hp','left');
        $this->db->join('gejala', 'pengetahuan.id_gejala = gejala.id_gejala','left');
        $query = $this->db->get();
        return $query;
	}

            function input_data($data,$table){
                $this->kode    = $_POST['id_pengetahuan'];

        $this->db->insert($table,$data);
                return $this->db->get('pengetahuan');

    }
      public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_pengetahuan,2)) as id_pengetahuan from pengetahuan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->id_pengetahuan)+1;
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

    function gets(){
        return $this->db->get('gejala');
    }
    
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

      function edit_data($where,$data){
        $this->db->where('id_pengetahuan', $where);
        $this->db->update('pengetahuan',$data);
    



   
}
}