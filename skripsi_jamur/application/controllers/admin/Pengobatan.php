<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengobatan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengobatan');
        $this->load->helper('url');

        if ($this->session->userdata('level') == "" | $this->session->userdata('level') == "user") {
            $this->session->set_flashdata('pesan', '<p class="text-center alert alert-warning" role="alert">Anda Harus Login Sebagai Admin !</p>');
            redirect('Auth');
        }
    }

    public function index()
    {

        $dariDB = $this->M_pengobatan->kode();
        $data = array('id_pengobatan' => $dariDB);
        $data["hp"] = $this->M_pengobatan->get()->result_array();
        $data["pengobatan"] = $this->M_pengobatan->tampil_data()->result_array();
        $this->load->view('admin/pengobatan', $data);
    }
    public function tambah_aksi()
    {
        $id_pengobatan = $this->input->post('id_pengobatan');
        $id_hp = $this->input->post('id_hp');
        $pengobatan = $this->input->post('pengobatan');

        $data = array(
            'id_pengobatan' => $id_pengobatan,
            'id_hp' => $id_hp,
            'pengobatan' => $pengobatan,
        );
        $this->M_pengobatan->input_data($data, 'pengobatan');
        $this->session->set_flashdata('pesan', '<p class="text-center alert alert-success" role="alert">Berhasil tambah data !</p>');
        redirect('admin/pengobatan');
    }

    function edit()
    {

        $id_pengobatan = $this->input->post('id_pengobatan');
        $pengobatan = $this->input->post('pengobatan');

        $data = array('id_pengobatan' => $id_pengobatan, 'pengobatan' => $pengobatan,);
        $this->M_pengobatan->edit_data($id_pengobatan, $data);
        $this->session->set_flashdata('pesan', '<p class="text-center alert alert-success" role="alert">Berhasil update data !</p>');
        redirect('admin/pengobatan');
        //print_r($data);

    }



    function hapus($id_pengobatan)
    {
        $where = array('id_pengobatan' => $id_pengobatan);
        $this->M_pengobatan->hapus_data($where, 'pengobatan');
        $this->session->set_flashdata('pesan', '<p class="text-center alert alert-success" role="alert">Berhasil hapus data !</p>');
        redirect('admin/pengobatan');
    }
}
