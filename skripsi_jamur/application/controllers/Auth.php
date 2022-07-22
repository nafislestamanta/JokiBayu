<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->model('M_register');
    }

    public function index()
    {
        // Validasi untuk username dan Password
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim',
            [
                'required' => 'Username Wajib diisi!',
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]',
            [
                'min_length' => 'Password terlalu pendek!', // min_length adalah minimal karaktek input, tinggal ubah angka 5 dengan angka berapa pun
                'required' => 'Password wajib diisi!',
            ]
        );

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login';
            $this->load->view('user/login', $data);
        } else {
            $this->_login();
        }
    }


    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Auth_model->cek_login($username)->row(); // Lempar ke User Model utk di cek, apakah username ada di database

        if ($user) {
            if (md5($password, $user->password)) { // jika username dan password cocok
                $data = [
                    'id_user' => $user->id_user,
                    'nama' => $user->nama,
                    'username' => $user->username,
                    'password' => $user->password,
                    'alamat' => $user->alamat,
                    'level' => $user->level,
                ];
                $this->session->set_userdata($data);

                if ($user->level == "admin") { // Jika Admin
                    $this->session->set_flashdata('pesan', 'Selamat Datang, ' . $this->session->userdata('nama'));
                    redirect('admin/Homeadmin');
                }
                if ($user->level == "user") { // Jika User biasa
                    $this->session->set_flashdata('pesan', '<p class="text-center alert alert-success">Selamat Datang,  ' . $this->session->userdata('nama') . '</p>');
                    redirect('Home');
                }
            } else { //Jika username benar dan password salah 
                $this->session->set_flashdata('pesan', '<p class="text-center alert alert-danger" role="alert">Password Salah !</p>');
                redirect('Auth');
            }
        } else { //Jika username dan password salah 
            $this->session->set_flashdata('pesan', '<p class="text-center alert alert-danger" role="alert">Username tidak terdaftar !</p>');
            redirect('Auth');
        }
    }

    public function register()
    {


        // Validasi untuk data user
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
            [
                'required' => 'Nama Wajib diisi!',
            ]
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|is_unique[user.username]',
            [
                'required' => 'Username Wajib diisi!',
                'is_unique' => 'Username sudah ada, ganti dengan nama lain !',
            ]
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'min_length' => 'Password minimal 5 karakter!', // min_length adalah minimal karaktek input, tinggal ubah angka 58 dengan angka berapa pun
                'required' => 'Password wajib diisi!',
                'matches' => 'Password tidak cocok',
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Ulangi Password',
            'required|trim|matches[password1]',
            [
                'required' => 'Password wajib diisi!',
                'matches' => 'Password tidak cocok',
            ]
        );
        $this->form_validation->set_rules(
            'no_hp',
            'No Hp',
            'required|trim',
            [
                'required' => 'No Hp Wajib diisi!',
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|trim',
            [
                'required' => 'Alamat Wajib diisi!',
            ]
        );

        if ($this->form_validation->run() == false) {

            $dariDB = $this->M_register->kode();
            $data = array('id_user' => $dariDB);
            //print_r($data);
            $this->load->view('user/register', $data);
        } else {
            $id_user = $this->input->post('id_user');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password2'), PASSWORD_DEFAULT);
            $no_hp = $this->input->post('no_hp');
            $alamat = $this->input->post('alamat');

            $data = array(
                'id_user' => $id_user,
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'no_hp' => $no_hp,
                'alamat' => $alamat,
                'level' => "user",
            );
            $this->Auth_model->insert($data);
            if ($data) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary dark alert-dismissible fade show" role="alert">
                <p><strong>Data Akun Anda Telah Disimpan</strong></p>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary dark alert-dismissible fade show" role="alert">
                <p><strong>Data belum tersimpan</strong></p>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>');
            }
            redirect('Auth');
        }
        //print_r($id_user);

    }

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('alamat');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata('pesan', '<p class="text-center alert alert-success" role="alert">Silahkan login kembali !</p>');
        redirect('Home');
    }


    public function block()
    {
        $data['title'] = 'Ooops... !';

        $this->load->view('user/blocked', $data);
    }
}
