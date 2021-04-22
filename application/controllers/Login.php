<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

  function index(){
    if($this->session->userdata('logged_in_elitbang') !== TRUE){
      $this->load->view('login_view');
    }else{ 
      redirect('dashboard');
    }
  }

  function auth(){
    $username = $this->input->post('username',TRUE);
    $password = $this->input->post('password');
    $validate = $this->login_model->validate($username);
    if($validate->num_rows() > 0){
      $katakunci = $this->db->query("SELECT password FROM tbl_pengguna WHERE username='$username' LIMIT 1")->row()->password;
      if(password_verify($password, $katakunci)){
        $data  = $validate->row_array();
        $id_pengguna_elitbang = $data['id_pengguna'];
        $username_elitbang = $data['username'];
        $password_elitbang = $data['password'];
        $nama_elitbang = $data['nama'];
        $level_elitbang = $data['level'];
        $jabatan_elitbang = $data['jabatan'];
        $status_elitbang = $data['status'];

        $sesdata = array(
          'id_pengguna_elitbang' => $id_pengguna_elitbang,
          'username_elitbang'    => $username_elitbang,
          'password_elitbang'    => $password_elitbang,
          'nama_elitbang'        => $nama_elitbang,
          'level_elitbang'       => $level_elitbang,
          'jabatan_elitbang'     => $jabatan_elitbang,
          'status_elitbang'      => $status_elitbang,
          'logged_in_elitbang'   => TRUE
        );
        $this->session->set_userdata($sesdata);
        redirect('dashboard');
      }else{
        echo $this->session->set_flashdata('msg','message');
        redirect('login');
      }      
    }else{ 
      echo $this->session->set_flashdata('msg','message');
      redirect('login');
    }
  }

  function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }

}