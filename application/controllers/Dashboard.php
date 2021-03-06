<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in_elitbang') !== TRUE && $this->session->userdata('status_elitbang')!=='YA'){
      redirect('/');
    }
  }

  /** ------------------------------------------------------------------ */
  function Index(){
    if($this->session->userdata('jabatan_elitbang')==='superadmin' && $this->session->userdata('level_elitbang')==='0'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/dashboard');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('jabatan_elitbang')==='bappeda' && $this->session->userdata('level_elitbang')==='1'){
      $this->load->view('bappeda/header');
      $this->load->view('bappeda/dashboard');
      $this->load->view('bappeda/footer');
    }else if($this->session->userdata('jabatan_elitbang')==='kesbangpol' && $this->session->userdata('level_elitbang')==='2'){
      $this->load->view('kesbangpol/header');
      $this->load->view('kesbangpol/dashboard');
      $this->load->view('kesbangpol/footer');
    }else if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $this->load->view('peserta/header');
      $this->load->view('peserta/dashboard');
      $this->load->view('peserta/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Input_permohonan(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $this->load->view('peserta/header');
      $this->load->view('peserta/input_permohonan');
      $this->load->view('peserta/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Permohonan_penelitian(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $this->load->view('peserta/header');
      $this->load->view('peserta/permohonan_penelitian');
      $this->load->view('peserta/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Permohonan_pengabdian(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $this->load->view('peserta/header');
      $this->load->view('peserta/permohonan_pengabdian');
      $this->load->view('peserta/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Riwayat_penelitian(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $this->load->view('peserta/header');
      $this->load->view('peserta/riwayat_penelitian');
      $this->load->view('peserta/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Riwayat_pengabdian(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $this->load->view('peserta/header');
      $this->load->view('peserta/riwayat_pengabdian');
      $this->load->view('peserta/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Detail_permohonan(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $this->load->view('peserta/header');
      if($this->input->get('jenis_permohonan') == 'Penelitian'){
        $this->load->view('peserta/detail_permohonan_penelitian');
      }else if($this->input->get('jenis_permohonan') == 'Pengabdian'){
        $this->load->view('peserta/detail_permohonan_pengabdian');
      }      
      $this->load->view('peserta/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Detail_riwayat(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $this->load->view('peserta/header');
      if($this->input->get('jenis_permohonan') == 'Penelitian'){
        $this->load->view('peserta/detail_riwayat_penelitian');
      }else if($this->input->get('jenis_permohonan') == 'Pengabdian'){
        $this->load->view('peserta/detail_riwayat_pengabdian');
      }      
      $this->load->view('peserta/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** ------------------------------------------------------------------ */
  /**
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   */
  /** FUNCTION */
  /** ------------------------------------------------------------------ */
  function Data_profil(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $id_peserta = $this->input->post('id_peserta');
      $nama_peserta = $this->input->post('nama_peserta');
      $tempat_lahir = $this->input->post('tempat_lahir');
      $tanggal_lahir = $this->input->post('tanggal_lahir');
      $jenis_kelamin = $this->input->post('jenis_kelamin');
      $no_hp = $this->input->post('no_hp');
      $alamat = $this->input->post('alamat');
      $pekerjaan = $this->input->post('pekerjaan');
      $kewarganegaraan = $this->input->post('kewarganegaraan');
  
      $simpan = $this->db->query("UPDATE tbl_peserta SET nama_peserta='$nama_peserta',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',no_hp='$no_hp',alamat='$alamat',pekerjaan='$pekerjaan',kewarganegaraan='$kewarganegaraan' WHERE id_peserta='$id_peserta'");
  
      if($simpan){
        redirect('dashboard');
      }else{
        $link = base_url('dashboard');
        echo "<script language=\"javascript\">alert(\"Gagal Update !\");document.location.href='$link';</script>";
      }
    }else{ 
      redirect('index/lockscren');
    }    
  }

  function Ganti_password(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $password_lama = $this->input->post('password_lama');
      $password_baru = $this->input->post('password_baru');
      $konfir_ulang = $this->input->post('konfir_ulang');
      $email = $this->session->userdata('email_elitbang');
      $katakunci = $this->db->query("SELECT password FROM tbl_peserta WHERE email='$email' LIMIT 1")->row()->password;
      if(password_verify($password_lama, $katakunci)){
        if($password_baru == $konfir_ulang){
          $password_simpan = password_hash($password_baru, PASSWORD_BCRYPT);
          $simpan = $this->db->query("UPDATE tbl_peserta SET password='$password_simpan' WHERE email='$email'");
          if($simpan){
            $link = base_url('dashboard');
            echo "<script language=\"javascript\">alert(\"Sukses ganti password !\");document.location.href='$link';</script>";
          }else{
            $link = base_url('dashboard');
            echo "<script language=\"javascript\">alert(\"Gagal Simpan !\");document.location.href='$link';</script>";
          }
        }else{
          $link = base_url('dashboard');
          echo "<script language=\"javascript\">alert(\"Konfirmasi ulang password salah !\");document.location.href='$link';</script>";
        }
      }else{
        $link = base_url('dashboard');
        echo "<script language=\"javascript\">alert(\"Password lama salah !\");document.location.href='$link';</script>";
      }
    }else{ 
      redirect('index/lockscren');
    }    
  }

  function Simpan_permohonan(){
    if($this->session->userdata('jabatan_elitbang')==='peserta' && $this->session->userdata('level_elitbang')==='3'){
      $data = array();
      $config['upload_path'] = './assets/backend/berkas_permohonan/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 1000;
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('berkas_permohonan')) {
        $error = ['error' => $this->upload->display_errors()];
        $link = base_url('dashboard/input_permohonan');
        echo "<script language=\"javascript\">alert(\"Ukuran file terlalu besar, Maksimal 1 MB!\");document.location.href='$link';</script>";
      }else{
        $fileData = $this->upload->data();
        $data1['berkas_permohonan'] = $fileData['file_name'];

        $id_peserta = $this->session->userdata('id_peserta_elitbang');
        $jenis_permohonan = $this->input->post('jenis_permohonan');
        $tujuan = $this->input->post('tujuan');
        $surat_dari = $this->input->post('surat_dari');
        $judul = $this->input->post('judul');
        $lokasi = $this->input->post('lokasi');
        $awal_pelaksanaan = $this->input->post('awal_pelaksanaan');
        $akhir_pelaksanaan = $this->input->post('akhir_pelaksanaan');
        $penanggung_jawab = $this->input->post('penanggung_jawab');
        $narahubung = $this->input->post('narahubung');
        $tanggal_permohonan = date('Y-m-d');
        $status_permohonan = "menunggu-verifikasi-bappeda";
        $berkas_permohonan = $data1['berkas_permohonan'];

        $simpan = $this->db->query("INSERT INTO tbl_permohonan(id_peserta,jenis_permohonan,tujuan,surat_dari,judul,lokasi,awal_pelaksanaan,akhir_pelaksanaan,penanggung_jawab,narahubung,tanggal_permohonan,status_permohonan,berkas_permohonan) VALUES('$id_peserta','$jenis_permohonan','$tujuan','$surat_dari','$judul','$lokasi','$awal_pelaksanaan','$akhir_pelaksanaan','$penanggung_jawab','$narahubung','$tanggal_permohonan','$status_permohonan','$berkas_permohonan')");
        if($simpan){
          $link = base_url('dashboard/input_permohonan');
          echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
        }else{
          echo "Gagal Simpan";
        }
      }
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** ------------------------------------------------------------------ */
  /** FUNCTION */

}