<?php
class Index extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  /** ------------------------------------------------------------------ */
  function Index(){
    $this->load->view('home/header');
    $this->load->view('home/body');
    $this->load->view('home/footer'); 
  }

  function Lockscren(){
    $this->load->view('lockscren_view');
  }

  function update(){
    $username = $this->input->get('username');
    $password = password_hash($this->input->get('password',TRUE), PASSWORD_BCRYPT);
    $update = $this->db->query("UPDATE tbl_pengguna SET password='$password' WHERE username='$username'");
    if($update){
      echo "berhasil";
    }else{
      echo "Gagal";
    }
  }

}