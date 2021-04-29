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
      <li>
        <a href="<?php echo base_url('dashboard/permohonan_penelitian'); ?>">
          <i class="fa fa-hourglass-1"></i> <span>Permohonan Penelitian</span>
        </a>
      </li>
      <li class="active">
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

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Detail <small> Permohonan Penelitian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url('dashboard/permohonan_penelitian'); ?>">Permohonan Penelitian</a></li>
            <li class="active">Detail</li>
        </ol>
    </section>
    <?php
        $id_permohonan = $this->session->userdata('id_peserta_elitbang');
        $data = $this->db->query("SELECT tbl_peserta.nama_peserta, tbl_permohonan.jenis_permohonan, tbl_permohonan.surat_dari, tbl_permohonan.tujuan, tbl_permohonan.judul, tbl_permohonan.lokasi, tbl_permohonan.awal_pelaksanaan, tbl_permohonan.akhir_pelaksanaan, tbl_permohonan.penanggung_jawab, tbl_permohonan.narahubung, tbl_permohonan.tanggal_permohonan, tbl_permohonan.status_permohonan FROM tbl_permohonan,tbl_peserta WHERE tbl_permohonan.id_peserta=tbl_peserta.id_peserta AND .tbl_permohonan.id_permohonan='$id_permohonan' LIMIT 1");
    ?>
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">
                <div class="box box-warning">
                    <div class="box-body">
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b><i class="fa fa-file-text-o"></i> Berkas Permohonan</b> <a class="pull-right" target="_blank" href="#"><i class="fa fa-external-link"></i> Lihat</a>
                            </li>
                            <!-- <li class="list-group-item">
                                <b><i class="fa fa-file-zip-o"></i> Surat Rekomendasi</b> <a class="pull-right" target="_blank" href="#"><i class="fa fa-download"></i> Unduh</a>
                            </li>
                            <li class="list-group-item">
                                <b><i class="fa fa-file-pdf-o"></i> Surat izin</b> <a class="pull-right" target="_blank" href="#"><i class="fa fa-download"></i> Unduh</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="box box-warning">
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th class="bg-info text-right" width="150">Nama</th>
                                <td class="text-left"><?php echo $data->row()->nama_peserta; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Permohonan</th>
                                <td class="text-left"><?php echo $data->row()->jenis_permohonan; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Surat Dari</th>
                                <td class="text-left"><?php echo $data->row()->surat_dari; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Tujuan</th>
                                <td class="text-left"><?php echo $data->row()->tujuan; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Judul</th>
                                <td class="text-left"><?php echo $data->row()->judul; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Lokasi</th>
                                <td class="text-left"><?php echo $data->row()->lokasi; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Awal Pelaksanaa</th>
                                <td class="text-left"><?php $new = strtotime($data->row()->awal_pelaksanaan); $newDate = date('d F Y', $new);  echo $newDate; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Akhir Pelaksanaan</th>
                                <td class="text-left"><?php $new1 = strtotime($data->row()->akhir_pelaksanaan); $newDate1 = date('d F Y', $new1);  echo $newDate1; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Penanggung Jawab</th>
                                <td class="text-left"><?php echo $data->row()->penanggung_jawab; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Narahubung</th>
                                <td class="text-left"><?php echo $data->row()->narahubung; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Tanggal Permohonan</th>
                                <td class="text-left"><?php $new2 = strtotime($data->row()->tanggal_permohonan); $newDate2 = date('d F Y', $new2);  echo $newDate2; ?></td>
                            </tr>
                            <tr>
                                <th class="bg-info text-right" width="150">Status Permohonan</th>
                                <td class="text-left">
                                    <?php
                                        if($data->row()->status_permohonan == 'menunggu-verifikasi-bappeda'){
                                            echo '<span class="label label-warning">menunggu-verifikasi-bappeda</span>';
                                        }else if($data->row()->status_permohonan == 'menunggu-verifikasi-kesbangpol'){
                                            echo '<span class="label label-info">menunggu-verifikasi-kesbangpol</span>';
                                        }else if($data->row()->status_permohonan == 'terverifikasi'){
                                            echo '<span class="label label-success">terverifikasi</span>';
                                        }else{
                                            echo '<span class="label label-danger">ditolak</span>';
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>