<?php include_once "header.php"; 
include "../core/koneksi.php";
?>

<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="row">
					<div class="panel-heading">
						<div class="col-md-2">
							<img src="../assets/img/favicon.png" width="100">
						</div>
						<div class="col-md-10">
							<h3 class="panel-title">Selamat Datang <?= $result['nama']; ?> di</h3>
							<h1>Aplikasi Buku Tamu</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- END MAIN CONTENT -->
</div>
<?php include_once "footer.php"; ?>