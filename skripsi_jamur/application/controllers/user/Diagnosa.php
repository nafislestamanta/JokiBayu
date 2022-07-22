<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_diagnosa');
        $this->load->helper('url');

        if($this->session->userdata('level') == ""){
            $this->session->set_flashdata('pesan', '<p class="text-center alert alert-warning" role="alert">Anda Harus Login Terlebih Dahulu !</p>');
            redirect('Auth');
          }
    }
    
	public function index()
	{
        $data["gejala"] = $this->M_diagnosa->tampil_data()->result_array();
        $this->load->view('user/diagnosa',$data);
    }

    public function pilihan()
	{
        $this->load->view('user/pilihan');
    }

    public function pdf()
    {
        
        $this->load->view('user/pdf_hasil');
    }
    
    public function hasil()
	{
        /*
        | ------------------------------------------------------------------------
        |  PROSES PENGAMBILAN DATA 
        | ------------------------------------------------------------------------
        |*/
        $counter = count($this->input->post('kondisi[]')); # hitung jumlah berapa gejala yang dipilih (digunakan untuk looping)
        $input_tanggal = date('Y-m-d H:i:s');
        $arbobot = array('0','1.0', '0.8', '0.6', '0.4', '0.2'); #nilai bobot dari kondisi yang dipilih user

        // Ambil gejala dan kondisi yang dipilih user
        for ($i = 0; $i < $counter; $i++) {
        $kondisi = explode("_", $_POST['kondisi'][$i]); //untuk memecah string setiap tanda petik
            if (strlen($_POST['kondisi'][$i]) > 1) { // strlen = untuk menghitung jumlah string atau karakter
                $argejala []= $kondisi[0]; // array gejala di pilih user
                $arkondisi [] = $kondisi[1]; // array kondisi yang dipilih user
            }
        }
        
        
        /*
        | ------------------------------------------------------------------------
        |  PERHITUNGAN NILAI CF
        | ------------------------------------------------------------------------
        |*/   

        $sql_penyakit = $this->db->query("SELECT * FROM hp order by id_hp ASC");
        $array_penyakit = array();
        foreach ($sql_penyakit->result_array() as $key) {
            $cftotal_temp = 0;
            $cf = 0;
            
            $cflama = 0;
            
            $query_gejala = $this->db->select('*')->where('id_hp', $key['id_hp'])->get('pengetahuan');
            
            foreach ($query_gejala->result_array() as $key => $value) { // foreach = perulangan data yang sudah ada pada tabel database
            
                
                for ($i = 0; $i < $counter; $i++) { //for = perulangan data yang belum ada pada tabel seperti hasil perkalian,dsb.
                    $array_kondisi = explode("_", $_POST['kondisi'][$i]); //untuk memecah string setiap tanda petik
                    $gejala = $array_kondisi[0];
                    if ($value['id_gejala'] == $gejala) {
                        $cf = $value['cf_pakar'] * $arbobot[$array_kondisi[1]];
                        
                        // Rumus Cf Combine
                        if (($cf >= 0) && ($cf * $cflama >= 0)) {
                            $cflama = $cflama + ($cf * (1 - $cflama));
                        }
                    }
                }
            }
            if ($cflama > 0) {
                # hasil dari semua perhitungan cf dalam bentuk array
                $array_penyakit += array($value['id_hp'] => number_format($cflama, 4));  
            } 
            
        }

            arsort($array_penyakit); # urutkan hasil perhitungan per penyakit dari nilai yang tertinggi sampai terendah
            $input_gejala = serialize($argejala); # ubah array menjadi varchar agar bisa disimpan di database
            $input_penyakit = serialize($array_penyakit); # ubah array menjadi varchar agar bisa disimpan di database

            $np1 = 0;
            foreach ($array_penyakit as $key1 => $value1) {
                $np1++;
                $penyakit_1[$np1] = $key1;
                $nilai[$np1] = $value1;
                
            }

        /*
        | ------------------------------------------------------------------------
        |  INSERT DATA HASIL PERHITUNGAN KE DATABASE
        | ------------------------------------------------------------------------
        |*/
            $data_hasil = [
                'id_user' =>$this->session->userdata('id_user'),
                'hp' =>$input_penyakit,
                'gejala' =>$input_gejala,
                'tanggal' =>$input_tanggal,
                'id_hp' =>$penyakit_1[1],
                'cf_hasil' =>$nilai[1],
            ];
            $this->db->insert('hasil', $data_hasil);
            

        /*
        | ------------------------------------------------------------------------
        |  PARSING DATA KE HALAMAN VIEW
        | ------------------------------------------------------------------------
        |*/
        $data['hasil'] = round($nilai[1], 3);
        $data['persentasi'] = round($nilai[1]*100); 
        $data['penyakit'] = $array_penyakit;
        $data['penyakit_lain'] = $array_penyakit;
        $data['kondisi'] = $arkondisi;
        $data['penyakit_terpilih'] = $penyakit_1[1];
        $data['gejala'] = $argejala;
        $data['title'] = 'Hasil Diagnosa';
        
        $this->load->view('user/hasil_diagnosa',$data);

        
    }
    
    
}
