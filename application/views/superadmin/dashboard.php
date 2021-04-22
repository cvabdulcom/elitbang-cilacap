<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/backend/') ?>dist/img/KOSONG.png" height="160" width="160"
          class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama_elitbang'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i>
          <?php 
            if($this->session->userdata('level_elitbang') == '0'){
              echo "Superadmin";
            }else if($this->session->userdata('level_elitbang') == '1'){
              echo "Kantor Bappeda";
            }else if($this->session->userdata('level_elitbang') == '2'){
              echo "Kantor Kesbangpol";
            }
          ?>
        </a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="active">
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="header">MENU NAVIGATION</li>
      <li>
        <a href="#">
          <i class="fa fa-legal"></i> <span>Master Request</span>
        </a>
      </li>
      <li class="header">REPORTING NAVIGATION</li>
      <li>
        <a href="#">
          <i class="fa fa-file-text-o"></i> <span>Laporan Request</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->