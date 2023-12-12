<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Shocat's | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/fontawesome-5.5.0/css/all.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/fontawesome-4.3.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/adminlte.min.css">
    <!-- Body style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/stylearyo.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Sho</b>Cat's</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-header text-light" style="background: #2A3F54">
      <h4 style="text-align: center; font-family: poppins;">Login Admin</h4>
    </div>
    <div class="card-body login-card-body">

      <?= $this->session->flashdata('massage'); ?>
      <form action="<?php echo site_url('adminpanel/login');?>" method="post">
        <div class="form-group">
        <label for="username">Username</label>
          <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" value="<?=set_value('username'); ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
        <?php echo form_error('username','<div class="text-danger pb-3 pt-0">','</div>'); ?>

        <div class="form-group">
        <label for="username">Password</label>
          <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" value="<?=set_value('password'); ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
        <?php echo form_error('password','<div class="text-danger pb-3 pt-0">','</smal></div>'); ?>
        </div>

        <div class="center">
          <!-- /.col -->
            <button type="submit" class="btn btn-block text-light" style="font-family: poppins; background: #2A3F54">Sign In</button>
          </div>
          <!-- /.col -->
        <!-- </div> -->
        </div>
      </form>

    <!-- /.login-card-body -->
    <div class="card-footer" style="text-align: center;">
          <p>Copyright © 2023 | <b> Shocat's </b></p>
    </div>

</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src= "<?php echo base_url('asset/plugins/jquery/jquery.min.js'); ?>" ></script>
<!-- Bootstrap 4 -->
<script src= "<?php echo base_url('asset/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>" ></script>
<!-- AdminLTE App -->
<script src= "<?php echo base_url('asset/dist/js/adminlte.min.js'); ?>" ></script>
</body>
</html>