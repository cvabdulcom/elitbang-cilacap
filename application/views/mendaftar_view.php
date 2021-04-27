<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mendaftar | e-Litbang Kabupaten Cilacap</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link href="<?php echo base_url('assets/frontend/'); ?>/img/favicon.png" rel="icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/dist/css/AdminLTE.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/plugins/iCheck/square/blue.css'); ?>">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/css/custom.css'); ?>">
  <script src="<?php echo base_url('/assets/backend/sweetalert/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/sweetalert/sweetalert.min.css'); ?>"/>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="<?php //echo base_url('/'); ?>"><b>BUFTER</b></a> -->
    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/'); ?>img/logo.png" alt="" class="img-fluid" height="70" width="210"></a>
  </div>
  <!-- /.login-logo -->
  <div class="register-box-body">
    <p class="login-box-msg">Mendaftar Peserta</p>

    <form action="#">
      <div class="form-group has-feedback">
        <label>Nama Peserta</label>
        <input type="text" class="form-control" name="nama_peserta" id="nama_peserta" placeholder="Contoh : Abdul Aziz">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Contoh : Cilacap">
        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo date('Y-m-d'); ?>">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <label>No Handphone</label>
        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Contoh : 08564732xxxx">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Contoh : Jalan/Kelurahan/RT RW, Kota"></textarea>
        <span class="glyphicon glyphicon-pushpin form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Pekerjaan</label>
        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Contoh : Mahasiswa">
        <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Kewarganegaraan</label>
        <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
          <option value="WNI">WNI</option>
          <option value="WNA">WNA</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <label>E-Mail</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Contoh : aziz@emailku.com">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <!-- <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Contoh : *******">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div> -->
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <div class="icheckbox_square-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> Saya setuju dengan aturan<a href="#"></a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <a id="Loading"><button type="button" id="btn_simpan" class="btn btn-warning btn-block btn-flat"><i class="fa fa-sign-in"></i> Daftar</button></a>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo base_url('masuk'); ?>" class="text-center"><i class="fa fa-arrow-circle-o-left"></i> Saya punya akun</a>
  </div>
  <!-- /.login-box-body -->
</div>
<br><br>
<input type="hidden" onclick="launch_toast()" id="message"/>
<!-- /.login-box -->
<!-- Message Box -->
<div id="toast"><div id="img"><i class="fa fa-remove"></i></div><div id="desc">Wrong! please try again.</div></div>
<!-- jQuery 3 -->
<script src="<?php echo base_url('/assets/backend/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('/assets/backend/plugins/iCheck/icheck.min.js'); ?>"></script>
<!-- Custom Js -->
<script src="<?php echo base_url('/assets/backend/js/custom.js'); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

  $(document).ready(function(){
    $('#<?php echo $this->session->flashdata('msg'); ?>').trigger('click');
  });

  $("#btn_simpan").click(function(){
    $("#Loading").empty();
    var button_loading = '<button type="button" class="btn btn-warning btn-block btn-flat active pull-right" disabled="disabled"><i class="fa fa fa-spinner fa-spin"></i> Loading</button>';
    $("#Loading").append(button_loading);

    var nama_peserta = $("#nama_peserta").val();
    var tempat_lahir = $('#tempat_lahir').val();
    var tanggal_lahir = $('#tanggal_lahir').val();
    var jenis_kelamin = $('#jenis_kelamin').val();
    var no_hp = $('#no_hp').val();
    var alamat = $('#alamat').val();
    var pekerjaan = $('#pekerjaan').val();
    var kewarganegaraan = $('#kewarganegaraan').val();
    var email = $('#email').val();
    // var password = $('#password').val();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('mendaftar/simpan'); ?>",
      data: {
              nama_peserta: nama_peserta,
              tempat_lahir: tempat_lahir,
              tanggal_lahir: tanggal_lahir,
              jenis_kelamin: jenis_kelamin,
              no_hp: no_hp,
              alamat: alamat,
              pekerjaan: pekerjaan,
              kewarganegaraan: kewarganegaraan,
              email: email,
              // password: password,
            },
      dataType: "json",
      success: function(data){
        if(data == true){
          swal({
            title: "Pendaftaran Berhasil, Silahkan Periksa Email Anda.",
            type: "success",
            confirmButtonColor: "#2C3FF9",
            showCancelButton: false,
            confirmButtonText: "OK",
            closeOnConfirm: true
          }, function(isConfirm) {
            location.reload();
          });
        }else{
          alert("Gagal Mendaftar: Diakibatkan karena email atau telepon sudah terdaftar");
        }
      }
    });
  });
</script>
</body>
</html>