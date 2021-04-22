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
  
  /** ------------------------------------------------------------------ */
  /** FUNCTION */

}