<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    //menjalankan model login, untuk menampilkan database
    $this->load->model('login_model');
  }

  //ketika sistem di akses akan menampilkan tampilan view login
  function index(){
    if($this->session->userdata('logged_in_elitbang') !== TRUE){ //jika gagal login
      $this->load->view('login_view');
    }else{ //jika berhasil login
      redirect('dashboard');
    }
  }

  function Register(){
    if($this->session->userdata('logged_in_elitbang') !== TRUE){ //jika gagal login
      $this->load->view('register_view');
    }else{ //jika berhasil login
      redirect('dashboard');
    }
  }

  //ketika melakukan login akan dicek
  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    // $password = password_hash($this->input->post('password',TRUE), PASSWORD_BCRYPT);
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){

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
    }else{ //jika user pass salah maka akan muncul notif
      echo $this->session->set_flashdata('msg','message');
      redirect('login');
    }
  }

  //funcsi untuk logout ketika klik link logout
  function logout(){
    $this->session->sess_destroy();
    redirect('/login');
  }

}