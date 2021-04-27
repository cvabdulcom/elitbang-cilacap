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
        <p><?php echo $this->session->userdata('nama_peserta_elitbang'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i>
          Peserta
        </a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="header">MENU NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('dashboard/input_permohonan'); ?>">
          <i class="fa fa-plus-square"></i> <span>Input Permohonan</span>
        </a>
      </li>
      <li class="header">MENU REPORTING</li>
      <li class="active">
        <a href="<?php echo base_url('dashboard/permohonan_penelitian'); ?>">
          <i class="fa fa-hourglass-1"></i> <span>Permohonan Penelitian</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/permohonan_pengabdian'); ?>">
          <i class="fa fa-street-view"></i> <span>Permohonan Pengabdian</span>
        </a>
      </li>
      <li class="header">MENU HISTORY</li>
      <li>
        <a href="<?php echo base_url('dashboard/riwayat_penelitian'); ?>">
          <i class="fa fa-circle-o"></i> <span>Riwayat Penelitian</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/riwayat_pengabdian'); ?>">
          <i class="fa fa-circle-o"></i> <span>Riwayat Pengabdian</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<?php
  $id = $this->session->userdata('id_peserta_elitbang');
  $data = $this->db->query("SELECT * FROM tbl_peserta WHERE id_peserta='$id' LIMIT 1");
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Permohonan <small>Penelitian</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Permohonan Penelitian</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    

  </section>
  <!-- /.content -->
</div>