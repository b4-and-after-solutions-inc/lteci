<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$this->config->item('website_name');?> | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?=base_url('assets/');?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/');?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/');?>css/ionicons.min.css">

  <link rel="stylesheet" href="<?=base_url('assets/');?>css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/');?>css/google-apis.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url('');?>"><b><?=$this->config->item('website_big');?> </b><?=$this->config->item('website_small');?> </a><!-- TODO Add href (?) -->
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?=base_url('');?>" method="post"><!-- TODO Add Login Functionality, with Session Management -->
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>

    <a href="#">I forgot my password</a><br><!-- TODO Forgot Password Functionality -->
    <a href="register.html" class="text-center">Register a new membership</a><!-- TODO New Member (?) Functionality -->

  </div>

</div>

<script src="<?=base_url('assets/');?>js/jquery.min.js"></script>
<script src="<?=base_url('assets/');?>js/bootstrap.min.js"></script>

</body>
</html>
