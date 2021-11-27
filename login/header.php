<?php 
	include "../core/koneksi.php";
	session_start();
 
	if(!isset($_SESSION['username'])){
		header("Location:login.php");
	}
?>

<?php
	$nama = $_SESSION['username'];
	$user = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$nama' ");
	$result = mysqli_fetch_assoc($user);
?>

<?php 
	$lvl = $_SESSION['username'];
	$roll = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$lvl' ");
	$level = mysqli_fetch_assoc($roll);

 ?>

<!doctype html>
<html lang="en">

<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
    <link rel="stylesheet" href="../assets/vendor/tabledata/style.css">
    <link rel="stylesheet" href="../assets/vendor/tabledata/boostrapDatatable.css">
	<link rel="stylesheet" href="../assets/vendor/jquery/jqueryTable.js">
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				Dashboard Aplikasi
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle border" data-toggle="dropdown"><b id="jam"></b></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<!-- Menu Admin -->
						<li><a href="index.php"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<?php if ( $level['level'] == "admin" ) {  ?>
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i> <span>Data Petugas</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="daftar_petugas.php" class="">Lihat Petugas</a></li>
									<li><a href="tambah_petugas.php" class="">Tambah Petugas</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Data Tamu</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="daftar_tamu.php" class="">Daftar Tamu Non-Pelayanan</a></li>
									<li><a href="daftar_tamu1.php" class="">Daftar Tamu Penerima Pelayanan</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-chart-bars" aria-hidden="true"></i> <span>Survey</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									<li><a href="data_survey.php"><span>Data Survey</span></a></li>
									<li><a href="statistik_survey.php" class="">Statistik Survey</a></li>
								</ul>
							</div>
						</li>
						<!-- menu petugas -->
						<?php }else{?>
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Data Tamu</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="daftar_tamu1.php" class="">Daftar Tamu Penerima Pelayanan</a></li>
									<li><a href="daftar_tamu.php" class="">Daftar Tamu Non Pelayanan</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>TambahTamu</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="tambah_tamu1.php" class="">Tamu Penerima Pelayanan</a></li>
									<li><a href="tambah_tamu.php" class="">Tamu Non Pelayanan</a></li>
								</ul>
							</div>
						</li>
						<li><a href="data_survey.php"><i class="lnr lnr-chart-bars" aria-hidden="true"></i> <span>Data Survey</span></a></li>
						<?php  } ?>
						<!-- Logout Menu -->
						<li><a href="logout.php"><i class="lnr lnr-power-switch"></i> <span>Log Out</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->