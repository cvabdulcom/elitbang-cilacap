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
      <li class="active">
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
      Input <small>Permohonan</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Input Permohonan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-warning">
      <form action="<?php echo base_url('dashboard/simpan_permohonan'); ?>" method="POST" enctype='multipart/form-data'>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="jenis_permohonan">Jenis Permohonan</label>
                <select name="jenis_permohonan" id="jenis_permohonan" class="form-control" required>
                  <option value="">-</option>
                  <option value="Penelitian">Penelitian</option>
                  <option value="Pengabdian">Pengabdian</option>
                </select>
              </div>
              <div class="form-group">
                <label for="tujuan">Tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Contoh : Penyusunan Skripsi/Penelitian/Tugas Akhir" required>
              </div>
              <div class="form-group">
                <label for="surat_dari">Surat dari & Nomor surat</label>
                <input type="text" class="form-control" id="surat_dari" name="surat_dari" placeholder="Contoh : Dekan Fakultas Teknik Nomor : XX/12/<?php echo date('Y'); ?>" required>
              </div>
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Contoh : Pengembangan Jaringan Sistem Smart City Cilacap" required>
              </div>
              <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <textarea name="lokasi" id="lokasi" rows="3" class="form-control" required placeholder="Contoh : Kelurahan Sidanegara, Dinas Kominfo, Kantor Bappeda"></textarea>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="awal_pelaksanaan">Awal Pelaksanaan</label>
                <input type="date" class="form-control" id="awal_pelaksanaan" name="awal_pelaksanaan" required>
              </div>
              <div class="form-group">
                <label for="akhir_pelaksanaan">Akhir Pelaksanaan</label>
                <input type="date" class="form-control" id="akhir_pelaksanaan" name="akhir_pelaksanaan" required>
              </div>
              <div class="form-group">
                <label for="penanggung_jawab">Penanggung Jawab</label>
                <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab" placeholder="Contoh : Dr.Eng. Abdul Aziz, S.Kom., M.Kom." required>
              </div>
              <div class="form-group">
                <label for="narahubung">Narahubung Kontak(HP/WA)</label>
                <input type="text" class="form-control" id="narahubung" name="narahubung" placeholder="Contoh : +628564732XXXX" required>
              </div>
              <div class="form-group">
                <label for="berkas_permohonan">Upload Berkas Permohonan (Pengantar dari Kampus/Instansi) Max 1 MB</label>
                <input type="file" id="berkas_permohonan" name="berkas_permohonan" class="form-control" required>
              </div>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <a href="<?php echo base_url('dashboard/input_permohonan'); ?>"><button class="btn btn-default btn-flat active pull-left" type="button"><i class="fa fa-retweet"></i> Batal</button></a>
          <button class="btn btn-success btn-flat pull-right" type="submit"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
  </section>
</div>