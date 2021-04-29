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
      <li class="active">
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
      Riwayat <small>Pengabdian</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Riwayat Pengabdian</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="box box-warning">
      <div class="box-body chart-responsive">                  
        <div class="form-horizontal table-responsive">
          <table class="table table-bordered table-hover" id="laporan">
            <thead>
              <tr class="bg-warning">
                <th class="text-center" width="10">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Jenis Permohonan</th>
                <th class="text-center">Surat Dari</th>
                <th class="text-center">Tanggal Permohonan</th>
                <th class="text-center">Status</th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=0;
                $id_peserta = $this->session->userdata('id_peserta_elitbang');
                foreach($this->db->query("SELECT * FROM tbl_permohonan WHERE jenis_permohonan='Pengabdian' AND id_peserta='$id_peserta' AND status_permohonan = 'terverifikasi' ORDER BY id_permohonan DESC")->result_array() as $tampil):
                  $no++;
                  $id_permohonan = $tampil['id_permohonan'];
                  $id_peserta = $tampil['id_peserta'];
                  $jenis_permohonan = $tampil['jenis_permohonan'];
                  $surat_dari = $tampil['surat_dari'];
                  $tujuan = $tampil['tujuan'];
                  $judul = $tampil['judul'];
                  $lokasi = $tampil['lokasi'];
                  $awal_pelaksanaan = $tampil['awal_pelaksanaan'];
                  $akhir_pelaksanaan = $tampil['akhir_pelaksanaan'];
                  $penanggung_jawab = $tampil['penanggung_jawab'];
                  $narahubung = $tampil['narahubung'];
                  $tanggal_permohonan = $tampil['tanggal_permohonan'];
                  $status_permohonan = $tampil['status_permohonan'];
                  $no_rekomendasi = $tampil['no_rekomendasi'];
                  $awal_rekomendasi = $tampil['awal_rekomendasi'];
                  $akhir_rekomendasi = $tampil['akhir_rekomendasi'];
                  $tanggal_rekomendasi = $tampil['tanggal_rekomendasi'];
                  $status_rekomendasi = $tampil['status_rekomendasi'];
                  $no_izin = $tampil['no_izin'];
                  $awal_berlaku = $tampil['awal_berlaku'];
                  $akhir_berlaku = $tampil['akhir_berlaku'];
                  $tanggal_izin = $tampil['tanggal_izin'];
                  $ttd_bappeda = $tampil['ttd_bappeda'];
                  $ttd_kesbangpol = $tampil['ttd_kesbangpol'];
                  $berkas_permohonan = $tampil['berkas_permohonan'];
                  $berkas_laporan = $tampil['berkas_laporan'];
                  $tembusan_rekomendasi = $tampil['tembusan_rekomendasi'];
                  $tembusan_izin = $tampil['tembusan_izin'];
              ?>
                <tr>
                  <td class="text-center"><?php echo $no; ?></td>
                  <td class="text-left"><?php echo $this->db->query("SELECT * FROM tbl_peserta WHERE id_peserta='$id_peserta'")->row()->nama_peserta; ?></td>
                  <td class="text-center"><?php echo $jenis_permohonan; ?></td>
                  <td class="text-left"><?php echo $surat_dari; ?></td>
                  <td class="text-center"><?php $new = strtotime($tanggal_permohonan); $newDate = date('d F Y', $new);  echo $newDate; ?></td>
                  <td class="text-center">
                    <?php
                      if($status_permohonan == 'menunggu-verifikasi-bappeda'){
                        echo '<span class="label label-warning">menunggu-verifikasi-bappeda</span>';
                      }else if($status_permohonan == 'menunggu-verifikasi-kesbangpol'){
                        echo '<span class="label label-info">menunggu-verifikasi-kesbangpol</span>';
                      }else if($status_permohonan == 'terverifikasi'){
                        echo '<span class="label label-success">terverifikasi</span>';
                      }else{
                        echo '<span class="label label-danger">ditolak</span>';
                      }
                    ?>
                  </td>
                  <td class="text-right" width="10">
                    <a href="<?php echo base_url('dashboard/detail_permohonan/').$id_permohonan; ?>"><button class="btn btn-info btn-flat btn-xs">Detail <i class="fa fa-list"></i></button></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>   
        </div>   
      </div>                    
    </div>

  </section>
  <!-- /.content -->
</div>