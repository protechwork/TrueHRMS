<?php 
 // include ('../common.php');
  $url = base_url();
  //$url = 'https://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 // $currentdir = dirname($_SERVER['PHP_SELF']);
 // include('scripts/user_validate.php');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IGTR - Student Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo ($url); ?>/alte320/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo ($url); ?>/alte320/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo ($url); ?>/alte320/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<!-- <? include('scripts/user_validate.php');   ?> -->
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>IG</b>TR</a>
  </div>
  <!-- /.login-logo -->
 
      <?php 
        if(!empty($userError))   {
        if ($userError['status'] =="alert-success") {
           /*  header("Location:" . $url . "/dashboard.php"); */
           echo '<script>window.location.href ="' . $url . '/dashboard.php";</script>';
           exit();
        }
           ?>
            <div class="captchdisplay">     
      <div class="form-group col-8 text-center">
        <div class="alert captchdisplay text-center <?php echo $userError['status']; ?>">
          <?php if(!empty($userError)) {  echo $userError['message']; }  ?>
        </div>
      </div>
      </div>
    <?php }?>  

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" name="user_validate" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->  

     <!--  <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo ($url); ?>/alte320/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo ($url); ?>/alte320/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo ($url); ?>/alte320/dist/js/adminlte.min.js"></script>
</body>
</html>
