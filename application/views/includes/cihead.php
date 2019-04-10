<!DOCTYPE html>
<html>

<head>

<link rel="shortcut icon" href="favicon.ico">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>LTE CI</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="author" content="JDC, GMT, FDRL">
<meta name="application-name" content="LTECI">

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
function logOut() {
	$.get("loginQuery.php?logout", function( data ) {
		if(data["status"] == "true") {
			window.location = "index.php?logout";
		}
	});
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
	<a href="index.php" class="logo">
		<span class="logo-mini"><b>LTE</b></span>
		<span class="logo-lg"><b>LTE</b> CI</span>
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
		<li class="active"><a href="<?=base_url();?>"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
		<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i> <span>Properties</span></a></li>
		<li><a href="<?=base_url();?>tenants.php"><i class="fa fa-users"></i> <span>Tenants</span></a></li>
		<li><a href="<?=base_url();?>transactions.php"><i class="fa fa-money"></i> <span>Transactions</span></a></li>
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
	<ol class="breadcrumb">
		<li class="active"><a href="index.php"> Dashboard</a></li>
	</ol>
</section>

<section class="content container-fluid">
