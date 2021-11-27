<!-- Tamu penerima layanan -->
<?php  include "header.php"; 
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime('now');

?>
		
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
                    <div class="panel">
                            <div class="panel-heading">
                                <b class="panel-title"><i class="lnr lnr-users"></i> Tambah Tamu Penerima Pelayanan</b>
                            </div>
                            <div class="panel-body">
                                <form action="tamu_proses1.php" method="POST" enctype="multipart/form-data">
                                    <p>Nama Lengkap</p>
                                    <input required name="nama" type="text" class="form-control">
                                    <br>
                                    <p>NIK</p>
                                    <input required name="nik" type="number" class="form-control">
                                    <br>
                                    <p>No HP</p>
                                    <input required name="kontak" type="number" class="form-control">
                                    <br>
                                    <p>E-Mail</p>
                                    <input required name="email" type="email" class="form-control">
                                    <br>
                                    <p>Instansi (Nama Lembaga / Pribadi)</p>
                                    <input required name="instansi" type="text" class="form-control">
                                    <br>
                                    <p>Pilih Meja Pelayanan</p>
                                        <input required type="radio"  name="meja" id="" value="Perdata"> Perdata <br>
                                        <input required type="radio"  name="meja" id="" value="Pidana"> Pidana <br>
                                        <input required type="radio"  name="meja" id="" value="Hukum"> Hukum<br>
                                        <input required type="radio"  name="meja" id="" value="Umum dan Keuangan"> Umum dan Keuangan
                                    <br> <br>
                                    <p>Keperluan:</p>
                                    <input required name="keperluan" type="tex" class="form-control">
                                    <br><br>
                                    <button name="sbm" style="width: 150px" class="btn btn-success" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
<?php include_once "footer.php"; ?>