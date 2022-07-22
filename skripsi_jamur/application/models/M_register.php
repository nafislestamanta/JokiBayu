<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

  
            function input_data($data,$table){
         $this->kode    = $_POST['id_user'];   
        $this->db->insert($table,$data);
                return $this->db->get('user');

    }

       public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_user,2)) as id_user from user");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->id_user)+1;
                $kd = sprintf("%02s", $tmp);
            }
        }else{
            $kd = "01";
        }
        
        return "A".$kd;
    }
}