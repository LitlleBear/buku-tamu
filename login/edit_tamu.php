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
						$tamuata = mysqli_query($koneksi,"SELECT * FROM tb_tamu WHERE id='$id' ");
						while ($tamu = mysqli_fetch_array($tamuata)) {
					?>

                        <form action="tamu_update.php" method="POST" enctype="multipart/form-data">
                            <p>Nama Lengkap</p>
                            <input required name="id" type="hidden" class="form-control" value="<?= $tamu['id']; ?>" >
							<input required name="nama" type="text" class="form-control" value="<?= $tamu['nama']; ?>" >
                            <br>
                            <p>NIK</p>
                            <input required name="nik" type="number" class="form-control" value="<?= $tamu['nik']; ?>" >
                            <br>
                            <p>No HP</p>
                            <input required name="kontak" type="number" class="form-control" value="<?= $tamu['kontak']; ?>" >
                            <br>
                            <p>Instansi</p>
                            <input required name="instansi" type="text" class="form-control" value="<?= $tamu['instansi']; ?>" >
                            <br>
                            <p>Kepentingan</p>
                            <input required name="kepentingan" type="text" class="form-control" value="<?= $tamu['kepentingan']; ?>" >
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