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
      <li class="active">
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="header">MENU NAVIGATION</li>
      <li>
        <a href="#">
          <i class="fa fa-plus-square"></i> <span>Input Permohonan</span>
        </a>
      </li>
      <li class="header">MENU REPORTING</li>
      <li>
        <a href="#">
          <i class="fa fa-hourglass-1"></i> <span>Permohonan Penelitian</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-street-view"></i> <span>Permohonan Pengabdian</span>
        </a>
      </li>
      <li class="header">MENU HISTORY</li>
      <li>
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Riwayat Penelitian</span>
        </a>
      </li>
      <li>
        <a href="#">
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
      Selamat Datang, <small><?php echo $this->session->userdata('nama_peserta_elitbang'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Peserta</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-warning">
          <div class="box-body box-profile"
            style="background-image: url('/assets/image/bg_profile.png'); background-repeat: no-repeat; background-size: cover; background-size: 100% 100%;">
            <img class="profile-user-img img-responsive" src="<?php echo base_url(); ?>/assets/backend/foto/<?php echo $data->row()->jenis_kelamin; ?>.jpg" alt="User profile picture">
            <h4 class="text-center"><?php echo $this->session->userdata('nama_peserta_elitbang'); ?></h4>
            <p class="text-muted text-center">Peserta</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <strong><i class="fa fa-briefcase"></i> Pekerjaan</strong>
                <p class="text-muted"><?php echo $data->row()->pekerjaan; ?></p>
              </li>
              <li class="list-group-item">
                <strong><i class="fa fa-book margin-r-5"></i> Tempat, Tanggal Lahir</strong>
                <p class="text-muted"><?php echo $data->row()->tempat_lahir; ?>, <?php $new = strtotime($data->row()->tanggal_lahir); $newDate = date('d F Y', $new);  echo $newDate; ?></p>
              </li>
              <li class="list-group-item">
                <strong><i class="fa fa-phone"></i> Telepon</strong>
                <p class="text-muted"><?php echo $data->row()->no_hp; ?></p>
              </li>
              <li class="list-group-item">
                <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
                <p class="text-muted"><?php echo $data->row()->alamat; ?></p>
              </li>
              <?php
                $biday = new DateTime($data->row()->tanggal_lahir);
                $today = new DateTime();
                $diff = $today->diff($biday);
                $umur = $diff->y;
              ?>
              <li class="list-group-item">
                <strong><i class="fa fa-clock-o"></i> Usia</strong>
                <p class="text-muted"><?php echo $diff->y ." Tahun"; ?></p>
              </li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

      <!-- /.col -->
      <div class="col-md-9">
        <div class="box box-warning">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#dataprofil" data-toggle="tab"><i class="fa fa-users"></i> Data Profil</a></li>
            <li><a href="#gantipassword" data-toggle="tab"><i class="fa fa-lock"></i> Ganti Password</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="dataprofil">
              <form action="<?php echo base_url('dashboard/data_profil'); ?>" method="POST">
                <div class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Peserta</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_peserta" id="nama_peserta" placeholder="Contoh : Abdul Aziz" value="<?php echo $data->row()->nama_peserta; ?>">
                      <input type="hidden" name="id_peserta" value="<?php echo $data->row()->id_peserta; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat Lahir</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Contoh : Cilacap" value="<?php echo $data->row()->tempat_lahir; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                      <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $data->row()->tanggal_lahir; ?>">
                      </div>
                    </div>      
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                      <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                        <option value="Laki-laki" <?php if($data->row()->jenis_kelamin == 'Laki-laki'){ echo "selected"; } ?>>Laki-laki</option>
                        <option value="Perempuan" <?php if($data->row()->jenis_kelamin == 'Perempuan'){ echo "selected"; } ?>>Perempuan</option>
                      </select>
                      </div>
                    </div>      
                    <div class="form-group">
                      <label class="col-sm-2 control-label">No Handphone</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Contoh : 08564732xxxx" value="<?php echo $data->row()->no_hp; ?>">
                      </div>
                    </div>      
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                      <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Contoh : Jalan/Kelurahan/RT RW, Kota"><?php echo $data->row()->alamat; ?></textarea>
                      </div>
                    </div>                  
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Pekerjaan</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Contoh : Mahasiswa" value="<?php echo $data->row()->pekerjaan; ?>">
                      </div>
                    </div>      
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Kewarganegaraan</label>
                      <div class="col-sm-10">
                      <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                        <option value="WNI" <?php if($data->row()->kewarganegaraan == 'WNI'){ echo "selected"; } ?>>WNI</option>
                        <option value="WNA" <?php if($data->row()->kewarganegaraan == 'WNA'){ echo "selected"; } ?>>WNA</option>
                      </select>
                      </div>
                    </div>      
                    <div class="form-group">
                      <label class="col-sm-2 control-label">E-Mail</label>
                      <div class="col-sm-10">
                      <input type="email" name="email" id="email" class="form-control" placeholder="Contoh : aziz@emailku.com" value="<?php echo $data->row()->email; ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success btn-block btn-flat"><i class="fa fa-save"></i> Update</button>
                  </div>
                </div>
              </form>              
            </div>
            
            <div class="tab-pane" id="gantipassword">
              <form action="<?php echo base_url('dashboard/ganti_password'); ?>" method="POST">
                <div class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Password Lama</label>
                      <div class="col-sm-10">
                        <input type="text" name="password_lama" id="password_lama" class="form-control"
                          placeholder="Ketik password lama" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Password Baru</label>
                      <div class="col-sm-10">
                        <input type="text" name="password_baru" id="password_baru" class="form-control"
                          placeholder="Ketik password baru" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Konfir Ulang</label>
                      <div class="col-sm-10">
                        <input type="text" name="konfir_ulang" id="konfir_ulang" class="form-control"
                          placeholder="Ketik ulang password baru" required>
                      </div>
                    </div>                  
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success btn-block btn-flat"><i class="fa fa-save"></i> Update</button>
                  </div>
                </div>
              </form>              
            </div>
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>