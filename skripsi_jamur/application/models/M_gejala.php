<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gejala extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    function tampil_data()
    {
        return $this->db->get('gejala');
    }

    function input_data($data, $table)
    {
        $this->kode    = $_POST['id_gejala'];
        $this->db->insert($table, $data);
        return $this->db->get('gejala');
    }
    public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_gejala,2)) as id_gejala from gejala");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->id_gejala) + 1;
                $kd = sprintf("%02s", $tmp);
            }
        } else {
            $kd = "01";
        }

        return "G" . $kd;
    }


    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $data)
    {
        $this->db->where('id_gejala', $where);
        $this->db->update('gejala', $data);
    }
}
