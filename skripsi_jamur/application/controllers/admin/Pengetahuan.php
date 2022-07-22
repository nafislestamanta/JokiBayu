<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengetahuan');
        $this->load->helper('url');

        if ($this->session->userdata('level') == "" | $this->session->userdata('level') == "user") {
            $this->session->set_flashdata('pesan', '<p class="text-center alert alert-warning" role="alert">Anda Harus Login Sebagai Admin !</p>');
            redirect('Auth');
        }
    }

    public function index()
    {

        $dariDB = $this->M_pengetahuan->kode();
        $data = array('id_pengetahuan' => $dariDB);
        $data["hp"] = $this->M_pengetahuan->get()->result_array();
        $data["gejala"] = $this->M_pengetahuan->gets()->result_array();
        $data["pengetahuan"] = $this->M_pengetahuan->tampil_data()->result_array();
        $this->load->view('admin/pengetahuan', $data);
    }
    public function tambah_aksi()
    {
        $id_pengetahuan = $this->input->post('id_pengetahuan');
        $id_hp = $this->input->post('id_hp');
        $id_gejala = $this->input->post('id_gejala');
        $cf_pakar = $this->input->post('cf_pakar');

        $data = array(
            'id_pengetahuan' => $id_pengetahuan,
            'id_hp' => $id_hp,
            'id_gejala' => $id_gejala,
            'cf_pakar' => $cf_pakar,
        );
        $this->M_pengetahuan->input_data($data, 'pengetahuan');
        $this->session->set_flashdata('pesan', '<p class="text-center alert alert-success" role="alert">Berhasil tambah data !</p>');
        redirect('admin/pengetahuan');
    }

    function edit()
    {

        $id_pengetahuan = $this->input->post('id_pengetahuan');
        $cf_pakar = $this->input->post('cf_pakar');

        $data = array('id_pengetahuan' => $id_pengetahuan, 'cf_pakar' => $cf_pakar,);
        $this->M_pengetahuan->edit_data($id_pengetahuan, $data);
        $this->session->set_flashdata('pesan', '<p class="text-center alert alert-success" role="alert">Berhasil update data !</p>');
        redirect('admin/pengetahuan');
        //print_r($data);

    }



    function hapus($id_pengetahuan)
    {
        $where = array('id_pengetahuan' => $id_pengetahuan);
        $this->M_pengetahuan->hapus_data($where, 'pengetahuan');
        $this->session->set_flashdata('pesan', '<p class="text-center alert alert-success" role="alert">Berhasil hapus data !</p>');
        redirect('admin/pengetahuan');
    }
}
