<!DOCTYPE html>
<html>

<head>

<link rel="shortcut icon" href="favicon.ico">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?=$this->config->item('website_name');?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="author" content="JDC, GMT, FDRL">
<meta name="application-name" content="<?=$this->config->item('website_name');?>">

<!-- LINKS Start -->

<link rel="stylesheet" href="<?=base_url('assets/');?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url('assets/');?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url('assets/');?>css/ionicons.min.css">

<link rel="stylesheet" href="<?=base_url('assets/');?>css/select2.min.css">

<link rel="stylesheet" href="<?=base_url('assets/');?>css/AdminLTE.min.css">
<link rel="stylesheet" href="<?=base_url('assets/');?>css/skin-black-light.css">
<link rel="stylesheet" href="<?=base_url('assets/');?>css/google-apis.min.css">

<link rel="stylesheet" href="<?=base_url('assets/');?>css/dataTables.bootstrap.min.css">

<!-- LINKS End -->

<!-- SCRIPTS Start -->

<script src="<?=base_url('assets/');?>js/jquery.min.js"></script>

<script src="<?=base_url('assets/');?>js/bootstrap.min.js"></script>

<script src="<?=base_url('assets/');?>js/select2.full.min.js"></script>

<script src="<?=base_url('assets/');?>js/adminlte.min.js"></script>

<script src="<?=base_url('assets/');?>js/jquery.slimscroll.min.js"></script>
<script src="<?=base_url('assets/');?>js/fastclick.min.js"></script>

<script src="<?=base_url('assets/');?>js/jquery.dataTables.min.js"></script>

<script src="<?=base_url('assets/');?>js/dataTables.bootstrap.min.js"></script>

<script src="<?=base_url('assets/');?>js/Chart.min.js"></script>

<script>
// NOTE What is this shit?
function logOut() { // TODO LogOut Session Destroy (?) Functionality and Redirect to Login
	//$.get("loginQuery.php?logout", function( data ) {
	//	if(data["status"] == "true") {
			window.location = "<?=base_url('access/login/');?>";
	//	}
	//});
}
</script>

<!-- SCRIPTS End -->

<head>

<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

<!-- HEADER Start -->
<?php // TODO Create Session Redirect when No User was Logged In
// if($_SESSION[$WebsiteName] == null)
// 	header("location: login.php");
?>

<header class="main-header">
	<a href="<?=base_url();?>" class="logo">
		<span class="logo-mini"><b><?=$this->config->item('website_big');?></b></span>
		<span class="logo-lg"><b><?=$this->config->item('website_big');?></b><?=$this->config->item('website_small');?></span>
	</a>

	<nav class="navbar navbar-static-top" role="navigation">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url('assets/img/users/'); ?>JDC.png" class="user-image" alt="User Image">
						<span class="hidden-xs">Temporary Name</span><!-- TODO Change to Logged In Name -->
					</a>

				<ul class="dropdown-menu">
					<li class="user-header">
						<img src="<?php echo base_url('assets/img/users/'.'JDC.png'); ?>" class="img-circle" alt="User Image">
						<p>Temporary Name <small>Temporary User</small></p><!-- TODO Change User Information to get via SESSION -->
					</li>

					<li class="user-footer">
					<div class="pull-left">
					<a href="#" class="btn btn-default btn-flat">Profile</a>
					</div>
					<div class="pull-right">
					<a onclick="logOut()" class="btn btn-default btn-flat">Sign out</a>
          <!-- TODO Change onclick Function -->
					</div>
					</li>
				</ul>
				</li>
			<!-- Removed Control Sidebar Toggle -->
			</ul>
		</div>
	</nav>
</header>
<!-- HEADER End -->

<!-- SIDEBAR Start -->
<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
		<li class="header">MAIN MENU</li><!-- TODO Dynamic Highlighting of Menu -->
		<li class="<?=($Menu1=='Dashboard'?'active':'');?>"><a href="<?=base_url();?>"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
		<li class="<?=($Menu1=='TableTest'?'active':'');?>"><a href="<?=base_url('main/table');?>"><i class="glyphicon glyphicon-file"></i> <span>Sample Table</span></a></li>
		<li class="<?=($Menu1=='Orders'?'active':'');?>"><a href="<?=base_url();?>"><i class="glyphicon glyphicon-shopping-cart"></i> <span>Orders</span></a></li>
		<li class="<?=($Menu1=='Purchases'?'active':'');?>"><a href="<?=base_url();?>"><i class="fa fa-cart-plus"></i> <span>Purchases</span></a></li>
		<li class="<?=($Menu1=='Suppliers'?'active':'');?>"><a href="<?=base_url();?>"><i class="fa fa-truck"></i> <span>Suppliers</span></a></li>
		<li class="<?=($Menu1=='Reports'?'active':'');?>"><a href="<?=base_url();?>"><i class="fa fa-area-chart"></i> <span>Reports</span></a></li>
		<li class="<?=($Menu1=='Money'?'active':'');?>"><a href="<?=base_url();?>"><i class="fa fa-money"></i> <span>Money</span></a></li>
		</ul>
	</section>
</aside>
<!-- SIDEBAR End -->

<div class="content-wrapper">

<section class="content-header">
	<h1><?=$Title;?>
	<section class='content-header'>
	<small><?=$Description;?></small>
	</h1>
	<!-- TODO Dynamic Breadcrumb -->
	<!--
	<ol class="breadcrumb">
		<li class="active"><a href="index.php"> Dashboard</a></li>
	</ol>
-->
</section>

<section class="content container-fluid">
