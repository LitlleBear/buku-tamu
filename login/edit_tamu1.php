<!-- TAMU PENERIMA LAYANAN -->
<?php  
include "../core/koneksi.php";
include "header.php";
?>

<div class="main">
			<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
		<!-- OVERVIEW -->
            <div class="panel">
                <div class="panel-heading">
                    <b class="panel-title"><i class="lnr lnr-users"></i> Tambah Tamu </b>
                </div>
                    <div class="panel-body">

                    <?php
						$id = $_GET['id'];
						$tamudata = mysqli_query($koneksi,"SELECT * FROM tb_tamu1 WHERE id='$id' ");
						while ($tamu = mysqli_fetch_array($tamudata)) {
					?>

                        <form action="tamu_update1.php" method="POST" enctype="multipart/form-data">
                            <p>Nama Lengkap</p>
                            <input required name="id" type="hidden" class="form-control" value="<?= $tamu['id']; ?>" >
							<input required name="nama" type="text" class="form-control" value="<?= $tamu['nama']; ?>" >
                            <br>
                            <p>NIK</p>
                            <input required name="nik" type="text" class="form-control" value="<?= $tamu['nik']; ?>" >
                            <br>
                            <p>No HP</p>
                            <input required name="kontak" type="text" class="form-control" value="<?= $tamu['kontak']; ?>" >
                            <br>
                            <p>E-Mail</p>
                            <input required name="email" type="email" class="form-control" value="<?= $tamu['email']; ?>" >
                            <br>
                            <p>Instansi</p>
                            <input required name="instansi" type="text" class="form-control" value="<?= $tamu['instansi']; ?>" >
                            <br>
                            <p>Meja Pelayanan</p>
                            <input required name="meja" type="text" class="form-control" value="<?= $tamu['meja']; ?>" >
                            <br>
                            <p>Kepentingan</p>
                            <input required name="keperluan" type="text" class="form-control" value="<?= $tamu['keperluan']; ?>" >
                            <br><br>
                            <button name="sbm" style="width: 150px" class="btn btn-success" type="submit">SUBMIT</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
		</div>
	</div>
			<!-- END MAIN CONTENT -->
</div>
<?php include_once "footer.php"; ?>