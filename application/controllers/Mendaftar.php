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

  function randomPassword(){
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
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
    $password = $this->randomPassword();
    $password_encrypt = password_hash($password, PASSWORD_BCRYPT);

    $simpan = $this->db->query("INSERT INTO tbl_peserta(nama_peserta,tempat_lahir,tanggal_lahir,jenis_kelamin,no_hp,alamat,pekerjaan,kewarganegaraan,email,password) VALUES('$nama_peserta','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$no_hp','$alamat','$pekerjaan','$kewarganegaraan','$email','$password_encrypt')");
    
    if($simpan){
      $sending_email = $this->Validation($email,$password);
      if($sending_email == true){
        echo json_encode(true);
      }else{
        echo json_encode(false);
      }
    }else{
      echo json_encode(false);
    }
  }

  function Validation($email,$password){
    $config = [
      'mailtype'  => 'html',
      'charset'   => 'utf-8',
      'protocol'  => 'smtp',
      'smtp_host' => 'smtp.gmail.com',
      'smtp_user' => 'verifikasi.bappeda.cilacap@gmail.com',
      'smtp_pass'   => 'Bappeda123!',
      'smtp_crypto' => 'ssl',
      'smtp_port'   => 465,
      'crlf'    => "\r\n",
      'newline' => "\r\n"
    ];

    $this->load->library('email', $config);
    $this->email->from('no-reply@geloragroup.com', 'Informasi Email dan Password');
    $this->email->to($email);
    $link = base_url('masuk');
    $this->email->subject('[No-Reply] Pendaftaran E-Litbang Bappeda Kabupaten Cilacap');
    $this->email->message("<b>Pemberitahuan!</b> Anda telah melakukan pendaftaran pada e-Litbang Bappeda Kabupaten Cilacap, silahkan melakukan login di <a href='".$link."'>Link</a>. <br>Berikut detail login anda : <br><br>&nbsp;&nbsp;&nbsp;&nbsp;Email : ".$email."<br>&nbsp;&nbsp;&nbsp;&nbsp;Password : ".$password."<br><br> <b>PERHATIAN !</b> Simpan baik-baik email pemberitahuan ini.<br><br><br>Salam,<br><b>Bappeda Cilacap</b>");
    $send = $this->email->send();
    if($send == true){
      return true;
    }else{
      return false;
    }
  }

}