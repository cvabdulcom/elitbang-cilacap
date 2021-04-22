<?php
class Masuk extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('masuk_model');
  }

  function index(){
    if($this->session->userdata('logged_in_elitbang') !== TRUE){
      $this->load->view('masuk_view');
    }else{
      redirect('dashboard');
    }
  }

  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = $this->input->post('password');
    $validate = $this->masuk_model->validate($email);
    if($validate->num_rows() > 0){
      $katakunci = $this->db->query("SELECT password FROM tbl_peserta WHERE email='$email' LIMIT 1")->row()->password;
      if(password_verify($password, $katakunci)){
        $data  = $validate->row_array();
        $id_peserta_elitbang = $data['id_peserta'];
        $nama_peserta_elitbang = $data['nama_peserta'];
        $tempat_lahir_elitbang = $data['tempat_lahir'];
        $tanggal_lahir_elitbang = $data['tanggal_lahir'];
        $jenis_kelamin_elitbang = $data['jenis_kelamin'];
        $no_hp_elitbang = $data['no_hp'];
        $alamat_elitbang = $data['alamat'];
        $pekerjaan_elitbang = $data['pekerjaan'];
        $kewarganegaraan_elitbang = $data['kewarganegaraan'];
        $email_elitbang = $data['email'];

        $sesdata = array(
          'id_peserta_elitbang'      => $id_peserta_elitbang,
          'nama_peserta_elitbang'    => $nama_peserta_elitbang,
          'tempat_lahir_elitbang'    => $tempat_lahir_elitbang,
          'tanggal_lahir_elitbang'   => $tanggal_lahir_elitbang,
          'jenis_kelamin_elitbang'   => $jenis_kelamin_elitbang,
          'no_hp_elitbang'           => $no_hp_elitbang,
          'alamat_elitbang'          => $alamat_elitbang,
          'pekerjaan_elitbang'       => $pekerjaan_elitbang,
          'kewarganegaraan_elitbang' => $kewarganegaraan_elitbang,
          'email_elitbang'           => $email_elitbang,
          'level_elitbang'           => '3',
          'jabatan_elitbang'         => "peserta",
          'status_elitbang'          => "YA",
          'logged_in_elitbang'       => TRUE
        );
        $this->session->set_userdata($sesdata);
        redirect('dashboard');
      }else{
        echo $this->session->set_flashdata('msg','message');
        redirect('masuk');
      }      
    }else{
      echo $this->session->set_flashdata('msg','message');
      redirect('masuk');
    }
  }

  function keluar(){
    $this->session->sess_destroy();
    redirect('masuk');
  }

}