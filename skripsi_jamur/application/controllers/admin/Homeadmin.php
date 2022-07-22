<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homeadmin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('level') == "" | $this->session->userdata('level') == "user") {
      $this->session->set_flashdata('pesan', '<p class="text-center alert alert-warning" role="alert">Anda Harus Login Sebagai Admin !</p>');
      redirect('Auth');
    }
  }

  public function index()
  {
    $this->load->model('M_hamapenyakit');
    $this->data['hp'] =  $this->M_hamapenyakit->total_rows();
    $this->data['gejala'] =  $this->M_hamapenyakit->total_row();
    $this->data['pengobatan'] =  $this->M_hamapenyakit->total();
    // $this->data['pencegahan'] =  $this->M_hamapenyakit->total_r();
    $this->data['pengetahuan'] =  $this->M_hamapenyakit->total_p();
    $this->data['user'] =  $this->M_hamapenyakit->total_u();
    $this->data['aturan'] =  $this->M_hamapenyakit->total_a();
    $this->data['hasil'] =  $this->M_hamapenyakit->total_h();
    $this->load->view('admin/homeadmin', $this->data);
  }
}
