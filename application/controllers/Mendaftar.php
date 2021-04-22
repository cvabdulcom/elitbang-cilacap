<?php
class Mendaftar extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('mendaftar_model');
  }

  function index(){
    if($this->session->userdata('logged_in_elitbang') !== TRUE){
      $this->load->view('mendaftar_view');
    }else{
      redirect('dashboard');
    }
  }

  function Simpan(){
    $nama_peserta = $this->input->post('nama_peserta');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $no_hp = $this->input->post('no_hp');
    $alamat = $this->input->post('alamat');
    $pekerjaan = $this->input->post('pekerjaan');
    $kewarganegaraan = $this->input->post('kewarganegaraan');
    $email = $this->input->post('email');
    $password = password_hash($this->input->post('password',TRUE), PASSWORD_BCRYPT);

    $simpan = $this->db->query("INSERT INTO tbl_peserta(nama_peserta,tempat_lahir,tanggal_lahir,jenis_kelamin,no_hp,alamat,pekerjaan,kewarganegaraan,email,password) VALUES('$nama_peserta','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$no_hp','$alamat','$pekerjaan','$kewarganegaraan','$email','$password')");

    if($simpan){
      echo json_encode(true);
    }else{
      echo json_encode(false);
    }
  }

}