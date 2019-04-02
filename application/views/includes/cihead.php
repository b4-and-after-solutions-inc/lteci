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

<!-- TODO Change href of Local Import of CSS and JS -->
<!-- TODO Remove Online CDN Stuff, Local lang -->
<!-- LINKS Start -->
<?php
if($this->config->item('local_import')) { ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/ionicons.min.css">

<!--<link rel="stylesheet" href="css/select2.min.css">-->

<link rel="stylesheet" href="css/AdminLTE.min.css">
<link rel="stylesheet" href="css/skin-black-light.css">
<link rel="stylesheet" href="css/google-apis.min.css">

<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

<?php } else { ?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css">

<!--<link rel="stylesheet" href="css/select2.min.css">-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.5/css/AdminLTE.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.5/css/skins/skin-black-light.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">

<?php } ?>
<!-- LINKS End -->

<!-- SCRIPTS Start -->
<?php
if($this->config->item('local_import')) { ?>
<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<!--<script src="js/select2.full.min.js"></script>-->

<script src="js/adminlte.min.js"></script>

<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/fastclick.min.js"></script>

<script src="js/jquery.dataTables.min.js"></script>

<script src="js/dataTables.bootstrap.min.js"></script>

<script src="js/Chart.min.js"></script>

<?php } else { ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	crossorigin="anonymous"></script>

<!--<script src="js/select2.full.min.js"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.5/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<?php } ?>

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
		<li class="active"><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
		<li><a href="properties.php"><i class="glyphicon glyphicon-home"></i> <span>Properties</span></a></li>
		<li><a href="tenants.php"><i class="fa fa-users"></i> <span>Tenants</span></a></li>
		<li><a href="transactions.php"><i class="fa fa-money"></i> <span>Transactions</span></a></li>
		</ul>
	</section>
</aside>
<!-- SIDEBAR End -->

<div class="content-wrapper">

<section class="content-header">
	<h1>$Title <!-- TODO Change to Dynamic Title -->
	<section class='content-header'>
	<small>$Description</small><!-- TODO Change to Dynamic Description -->
	</h1>
	<ol class="breadcrumb">
		<li class="active"><a href="index.php"> Dashboard</a></li>
	</ol>
</section>

<section class="content container-fluid">
